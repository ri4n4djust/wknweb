<?php

// namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable = [
        'name','email','password',
    ];

    protected $table = 'admins';
    
    protected $hidden = [
      'password','remember_token',
    ];
}
