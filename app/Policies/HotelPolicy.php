<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Hotel;

class HotelPolicy extends Policy
{
    public function update(User $user, Hotel $hotel)
    {
        // return $hotel->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Hotel $hotel)
    {
        return true;
    }
}
