<?php  namespace Epro360\Mailers;
use View;

/**
 * Class UserMailer
 * @package Epro360\Mailers
 */
class UserMailer extends Mailer {

    /**
     * @param $user
     * @param $model
     * @param $password
     */
    public function accountCreated($user, $model, $password)
    {
        $view = View::make("emails.users.notifications.{$model}-created")->render();
        dd($view);
        $data = [
            "name" => $user->username,
            "password" => $password
        ];
        $subject = trans('emails.{$model}.subject');


        return $this->sendTo($user, $subject, $view, $data);
    }

} 