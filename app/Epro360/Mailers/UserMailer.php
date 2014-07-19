<?php  namespace Epro360\Mailers;

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
        $view = "emails.users.notifications.{$model}-created";
        $data = [
            "name" => $user->username,
            "password" => $password
        ];
        $subject = trans('emails.{$model}.subject');


        return $this->sendTo($user, $subject, $view, $data);
    }

} 