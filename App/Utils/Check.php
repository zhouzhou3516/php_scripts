<?php


namespace App\Utils;


class Check
{
    /**
     * @param $email
     * @return bool
     */
    public static function isEmailLegal($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

}