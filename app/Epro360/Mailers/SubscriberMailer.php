<?php  namespace Epro360\Mailers;


/**
 * Class SubscriberMailer
 * @package Epro360\Mailers
 */
class SubscriberMailer extends Mailer {

    public function subscribe($events)
    {
        $events->listen('promo.subscriber.created', 'Epro360\Mailers\SubscriberMailer@subscribedToPromo');
    }

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

    public function subscribedToPromo($subscriber)
    {
        $view = 'emails.subscribers.promo';
        $data = [
            "name" => $subscriber->name
        ];
        $subject = trans('emails.promo.subject');


        return $this->sendTo($subscriber, $subject, $view, $data);
    }

} 