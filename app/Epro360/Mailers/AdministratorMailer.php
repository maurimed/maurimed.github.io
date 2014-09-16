<?php  namespace Epro360\Mailers;

/**
 * Class AdministratorMailer
 * @package Epro360\Mailers
 */
class AdministratorMailer extends Mailer {



    /**
     * Outline all the events this class will be listening for.
     * @param  [type] $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen('user.administrator.created', 'Epro360\Mailers\AdministratorMailer@welcome');
    }

    /**
     * @param $administrator
     * @internal param $password
     */
    public function welcome($administrator)
    {

        $view = 'emails.users.notifications.administrator-created';
        $data = [
            "name" => $administrator->firstname,
            "password" => $administrator->password
        ];
        $subject = 'Administrator created!';


        return $this->sendTo($administrator, $subject, $view, $data);
    }


} 