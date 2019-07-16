<?php

namespace ACME;

class AuthController implements RespondsToUserRegistration 
{

    protected $registration;

    public function __construct(RegisterUser $registration)
    {

        $this->registration = $registration;

    }


    public function register()
    {

        $this->registration->execute([], $this);

    }

    public function userRegisteredSuccessfully()
    {

        var_dump('created success. Redirect');

    }

    public function userRegisteredFailed()
    {

        var_dump('created failed. Redirect');

    }

}