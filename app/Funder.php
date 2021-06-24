<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Funder extends Authenticatable
{
    use Notifiable;

    protected $guard = 'funder';

    protected $fillable = [
        'name', 'email', 'password', 'uuid'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
