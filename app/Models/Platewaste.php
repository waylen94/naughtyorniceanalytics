<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platewaste extends Model
{
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
