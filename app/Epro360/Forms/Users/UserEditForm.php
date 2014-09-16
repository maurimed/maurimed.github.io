<?php namespace Epro360\Forms\Users;

use Hash;
use Laracasts\Validation\FormValidationException;
use Laracasts\Validation\FormValidator;
use User;

class UserEditForm extends FormValidator {

    protected $id;

    /**
     * Validation rules for edit a user
     *
     * @var array
     */
    protected $rules = [];

    public function validateUpdate($id, $input)
    {

        $userWantsToChangePassword = $this->verifyIfUserWantsToChangeYourPassword($input);

        if ($userWantsToChangePassword)
        {
            $this->changeThePassword($id, $input);
        }

        $this->rules['email'] = "required|email|unique:users,email,$id";

        $this->rules['username'] = "required|unique:users,username,$id";

        return $this->validate($input);
    }

    /**
     * @param $id
     * @param $input
     * @throws FormValidationException
     */
    private function checkIfOldPasswordMatch($id, $input)
    {
        if (Hash::check($input['old_password'], User::find($id)->password))
        {
            $changePassword = true;
        } else
        {
            throw new FormValidationException('There where validation errors', 'You need to know your old password in order to change to a new one');
        }
    }

    /**
     * @param $input
     * @return bool
     */
    private function verifyIfUserWantsToChangeYourPassword($input)
    {
        $changePassword = false;

        $passwordFields = [
            'old_password'     => $input['old_password'],
            'password'         => $input['password'],
            'password_confirm' => $input['password_confirmation'],
        ];

        foreach ($passwordFields as $field)
        {
            if ($field != '') $changePassword = true;;
        }

        return $changePassword;
    }

    /**
     * @param $id
     * @param $input
     * @throws FormValidationException
     */
    private function checkIfNewPasswordWasProvided($id, $input)
    {
        if ($input['password'] != '')
        {
            $this->checkIfOldPasswordMatch($id, $input);
        } else
        {
            $this->rules['password'] = "required|confirmed";
        }
    }

    /**
     * @param $id
     * @param $input
     */
    private function changeThePassword($id, $input)
    {
        if ($input['old_password'] != '')
        {
            $this->checkIfNewPasswordWasProvided($id, $input);
        } else
        {
            $this->rules['old_password'] = "required";
        }
    }


}