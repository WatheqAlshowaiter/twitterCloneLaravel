<?php

namespace App\Models;


trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unFollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        // old way
        // "if ($this->following($user)) {
        //     return $this->unFollow($user);
        // } else {
        //     return $this->follow($user);
        // }

        return $this->follows()->toggle($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
}
