<?php  namespace Epro360\Mailers;
use View;

/**
 * Class UserMailer
 * @package Epro360\Mailers
 */
class UserMailer extends Mailer {



    /**
     * Outline all the events this class will be listening for.
     * @param  [type] $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen('user.manager.created', 'Epro360\Mailers\UserMailer@testEvent');
    }
    
    /**
     * @param $user
     * @param $model
     * @param $password
     */
    public function accountCreated($user, $model, $password)
    {
        $view = View::make('emails.users.notifications.{$model}-created')->render();
        $data = [
            "name" => $user->username,
            "password" => $password
        ];
        $subject = trans('emails.{$model}.subject');


        return $this->sendTo($user, $subject, $view, $data);
    }

    public function testEvent($user)
    {
        var_dump($user->firstname);
    }

} 