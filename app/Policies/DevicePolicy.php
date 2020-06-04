<?php

namespace App\Policies;

use App\Device;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DevicePolicy
{
    use HandlesAuthorization;

     
    public function deletedevice(User $user)
    {
        dd('deletedevice');
    }

    
}
