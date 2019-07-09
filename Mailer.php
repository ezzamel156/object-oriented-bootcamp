<?php

abstract class Mailer 
{

    public function send($to, $from, $body)
    {



    }

}

class UserMailer extends Mailer 
{

    public function sendWelcomeEmail(User $user, $to, $body)
    {

        $this->send($user->email, $to, $body);

    }

}

class AdminMailer extends Mailer
{



}