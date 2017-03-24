<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'isactive',
        'isapproved',
        'isadmin'
    ];

    public static function isValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (self::whereEmail($email)->count()) {
            return false;
        }

        return true;
    }

    public function toArray()
    {
        return parent::toArray();
    }


}
