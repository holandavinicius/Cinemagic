<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
        use HandlesAuthorization;
    
        /**
         * Determine whether the user can update their own profile.
         *
         * @param  \App\Models\User  $user
         * @param  \App\Models\User  $model
         * @return mixed
         */
        public function update(User $user, User $model)
        {
            return $user->id === $model->id;
        }

}
