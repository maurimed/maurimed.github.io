<?php  namespace Epro360\Mailers;


/**
 * Class SubscriberMailer
 * @package Epro360\Mailers
 */
class SubscriberMailer extends Mailer {

    /**
     * @param $subscriber
     */
    public function thanks($subscriber)
    {
        $view = 'emails.subscribers.thanks';
        $data = [
            "name" => $subscriber->name
        ];
        $subject = trans('emails.subscribers.subject');


        return $this->sendTo($subscriber, $subject, $view, $data);
    }

} 