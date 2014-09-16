<?php  namespace Epro360\Mailers;
use Str;

/**
 * Class ManagerMailer
 * @package Epro360\Mailers
 */
class ManagerMailer extends Mailer {

    /**
     * Outline all the events this class will be listening for.
     * @param  [type] $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen('user.manager.created', 'Epro360\Mailers\ManagerMailer@welcome');
    }

    /**
     * @param $manager
     * @internal param $password
     */
    public function welcome($manager)
    {
//        dd($manager);
        $view = 'emails.users.notifications.manager-created';

        $username = Str::slug($manager->email);

        $subject = 'Welcome to our Epro 360 Educational Institution Network Administration';

        $data = [
            "subject"   => $subject,
            "name"      => $manager->lastname,
            "username"  => $username,
            "password"  => $manager->password,
            "email"     => $manager->email
        ];

        return $this->sendTo($manager, $subject, $view, $data);
    }


} 