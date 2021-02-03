<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Video;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideoPolicy
{
    use HandlesAuthorization;

    public function addComment(User $user, Video $video)
    {
        // Here we can deny users to create comments.
        return true;
    }
}
