<?php namespace Epro360\Mailers;

use Mail;

abstract class Mailer {

    public  function sendTo($subscriber, $subject, $view, $data = [])
    {
        Mail::queue($view, $data, function($message) use ($subscriber, $subject){
            $message->to($subscriber->email)
                    ->subject($subject);
        });
    }

} 