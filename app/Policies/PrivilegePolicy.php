<?php

namespace App\Policies;

use App\Models\Privilege;
use App\Models\walk;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrivilegePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(walk $walk)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(walk $walk, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\walk  $walk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(walk $walk)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(walk $walk, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(walk $walk, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(walk $walk, Privilege $privilege)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Privilege  $privilege
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(walk $walk, Privilege $privilege)
    {
        //
    }
}
