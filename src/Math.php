<?php

namespace ACME;

class Math 
{

    public static function Add(...$values)
    {

        return array_sum($values);

    }

}