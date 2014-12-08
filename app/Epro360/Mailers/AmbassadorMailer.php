<?php  namespace Epro360\Mailers;

/**
 * Class AmbassadorMailer
 * @package Epro360\Mailers
 */
class AmbassadorMailer extends Mailer {



    /**
     * Outline all the events this class will be listening for.
     * @param  [type] $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen('user.ambassador.created', 'Epro360\Mailers\AmbassadorMailer@welcome');
    }

    /**
     * @param $ambassador
     * @internal param $password
     */
    public function welcome($ambassador)
    {

        $view = 'emails.users.notifications.ambassador-created';
        $data = [
            "name" => $ambassador->firstname,
            "email" => $ambassador->email,
            "password" => $ambassador->password
        ];
        $subject = 'Ambassador created!';


        return $this->sendTo($ambassador, $subject, $view, $data);
    }


} 