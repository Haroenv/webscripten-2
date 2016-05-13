<?php

namespace App\Policies;
use App\User;
use App\Blogpost;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogpostPolicy
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

    public function destroy(User $user, Blogpost $blogpost)
    {
        return $user->user_id == $blogpost->user_id;
    }
}
