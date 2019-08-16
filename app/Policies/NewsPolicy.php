<?php

namespace App\Policies;

use App\Models\User;
use App\Models\News;

class NewsPolicy extends Policy
{
    public function update(User $user, News $news)
    {
        return $user->isAuthorOf($news);
    }
    
    public function destroy(User $user, News $news)
    {
        return $user->isAuthorOf($news);
    }
}
