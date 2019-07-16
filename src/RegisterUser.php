<?php

namespace ACME;

class RegisterUser
{

    public function execute($data, RespondsToUserRegistration $listener)
    {
     
        var_dump('Registering the user.');

        $isSaved = False;

        if($isSaved)
            $listener->userRegisteredSuccessfully();
        else    
            $listener->userRegisteredFailed();

    }

}