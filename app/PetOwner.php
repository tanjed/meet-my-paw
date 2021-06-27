<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PetOwner extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    public function profile()
    {
        return $this->hasOne(PetOwnerProfile::class,'pet_owner_id','id');
    }
}
