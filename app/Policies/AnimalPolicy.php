<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Animal;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnimalPolicy
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

    public function create(User $user, Animal $animal)
    {
       
        return $user->role == 1;
    }

    public function delete(User $user, Animal $animal)
    {

        return $user->id == $animal->user_id;
    }

    public function update(User $user, Animal $animal)
    {
        return $user->id == $animal->user_id;
    }
}
