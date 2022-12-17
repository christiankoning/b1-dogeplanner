<?php

namespace App\Policies;

use App\Models\PunchCard;
use App\Models\walk;
use Illuminate\Auth\Access\HandlesAuthorization;

class PunchCardPolicy
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
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(walk $walk, PunchCard $punchCard)
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
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(walk $walk, PunchCard $punchCard)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(walk $walk, PunchCard $punchCard)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(walk $walk, PunchCard $punchCard)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\walk  $walk
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(walk $walk, PunchCard $punchCard)
    {
        //
    }
}
