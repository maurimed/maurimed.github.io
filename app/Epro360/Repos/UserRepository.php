<?php  namespace Epro360\Repos;

use Administrator;
use Ambassador;
use Director;
use Epro360\Services\ImageService;
use Laracasts\Validation\FormValidationException;
use Redirect;
use Student;
use User;
use Epro360\Forms\ProfileEditForm as ProfileForm;

class UserRepository {

    protected $profileForm;

    protected $imageService;


    function __construct(ProfileForm $profileForm, ImageService $imageService )
    {

        $this->profileForm = $profileForm;

        $this->imageService = $imageService;

    }

    public function getAll()
    {
        return User::with('userable')->get();
    }

    public function getAdmins()
    {
        return Administrator::with('profile')->get();
    }


    public function getStudents()
    {
        return Student::with('profile')->get();
    }


    public function getAmbassadors()
    {
        return Ambassador::with('profile')->get();
    }


    public function getDirectors()
    {
        return Director::with('profile')->get();
    }

    public function findByUsername($username)
    {
        return $user = User::whereUsername($username)->with('userable')->firstOrFail();
    }

    public function findById($id)
    {
        return  User::with('userable')->findOrFail($id);
    }


    public function update($input, $userId)
    {

        $user = $this->findById($userId);

        $input = $this->makeUsername($input, $user);

        $this->makePassword($input, $user);

        $this->validate($input);


        $user->userable->firstname = $input['firstname'];
        $user->userable->lastname = $input['lastname'];

        $this->imageService->profileImage($input, $user);

        $user->userable->update($input);
        $user->save();

        return $user;
    }

    /**
     * @param $input
     * @param $user
     * @return array
     */
    private function makeUsername($input, $user)
    {
        if ($user->username == $input['username'])
        {
            $input = array_except($input, array('username'));

            return $input;
        }
        else
        {
            $user->username = $input['username'];

            return $input;
        }
    }

    /**
     * @param $input
     * @param $user
     */
    private function makePassword($input, $user)
    {
        if ($input['password'] != '')
        {
            $user->password = \Hash::make($input['password']);
            return $input;

        }

        return $input;
    }



    /**
     * @param $input
     */
    private function validate($input)
    {
        try
        {
            $this->profileForm->validate($input);

        } catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors())->withDangerMessage('There were validation errors');
        }
    }





} 