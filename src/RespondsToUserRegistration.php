<?php

namespace ACME;

interface RespondsToUserRegistration
{

    public function userRegisteredSuccessfully();

    public function userRegisteredFailed();

}