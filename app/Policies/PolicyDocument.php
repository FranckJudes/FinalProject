<?php

namespace App\Policies;

use App\Models\Documents;
use App\Models\Utilisateur;
use Illuminate\Auth\Access\HandlesAuthorization;

class PolicyDocument
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->roles->contains('slug', 'admin')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Utilisateur  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Utilisateur $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Utilisateur  $user
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Utilisateur $user, Documents $documents)
    {
      
        if ($user->roles->contains('slug', 'admin')) {
            return true;
        }elseif($user->permissions->contains('slug', 'read')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Utilisateur $user)
    {
        if ($user->roles->contains('slug', 'admin')) {
            return true;
        }elseif($user->permissions->contains('slug', 'create')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Utilisateur $user, Documents $documents)
    {
        if ($user->roles->contains('slug', 'admin')) {
            return true;
        }elseif($user->permissions->contains('slug', 'update')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Utilisateur  $user
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Utilisateur $user, Documents $documents)
    {
        if($user->permissions->contains('slug', 'delete')) {
            return true;
        } elseif ($user->roles->contains('slug', 'admin')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Utilisateur  $user
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Utilisateur $user, Documents $documents)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Utilisateur  $user
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Utilisateur $user, Documents $documents)
    {
        //
    }
}