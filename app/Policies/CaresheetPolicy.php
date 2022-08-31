<?php

namespace App\Policies;

use App\Models\CareSheet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaresheetPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(User $user, CareSheet $careSheet)
    {
       
        return $user->role == 3;
    }
}
