<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function before($user, $ability)
	{
	    // if ($user->isSuperAdmin()) {
	    // 		return true;
	    // }
	}
	
	public function update(User $user, News $news)
	{
	    return $news->user_id == $user->id;
	}
}
