<?php

namespace App\Policies;

use App\Models\MyClass;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MyClassPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->can('read class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MyClass $myClass)
    {
        if ($user->can('read class')) {
            return true;
        }
    }


    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->can('create class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MyClass $myClass)
    {
        if ($user->can('update class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */

    public function delete(User $user, MyClass $myClass)
    {
        if ($user->can('delete class')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MyClass $myClass)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MyClass $myClass)
    {
        //
    }
}
