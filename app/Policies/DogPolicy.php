<?php

namespace App\Policies;

use App\Models\Dog;
use App\Models\walk;
use Illuminate\Auth\Access\HandlesAuthorization;

class DogPolicy
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
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(walk $walk, Dog $dog)
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
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(walk $walk, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(walk $walk, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(walk $walk, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(walk $walk, Dog $dog)
    {
        //
    }
}
