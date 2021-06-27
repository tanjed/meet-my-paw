<?php

use Carbon\Carbon;

function detectGuard($type): string
{
    switch ($type){
        case 'pet_seekers' :
            return 'pet_seekers';
        default :
            return 'pet_owners';
    }
}

function generateUserName($name): string
{
    return $name . '~' . strtotime(Carbon::now()->format('h:i:s')) . rand(0, 9);
}

function getUserModelFromGuard($type)
{
    switch ($type){
        case 'pet_seekers' :
            return new PetSeeker();
        default :
            return new PetOwner();
    }
}
