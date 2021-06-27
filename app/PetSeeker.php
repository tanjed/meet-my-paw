<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PetSeeker extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    public function profile()
    {
        return $this->hasOne(PetSeekerProfile::class,'pet_seeker_id','id');
    }
}
