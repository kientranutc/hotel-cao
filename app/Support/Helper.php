<?php
namespace  App\Support;
use Illuminate\Support\Facades\Mail;

class Helper {
    public static function sendEmail ($view, $data, $email, $subject)
    {

        Mail::send($view,
            compact('data'), function($m) use ($email, $subject)
            {
                $m->from('kienkien95ht@gmail.com');
                $m->to($email)->subject($subject);
            });
    }
}
?>