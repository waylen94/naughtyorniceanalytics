<?php

namespace App\Models;

class Hotel extends Model
{
    protected $fillable = ['name', 'star', 'room_number', 'description', 'location','invitation_code'];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function platewaste(){
        
        return $this->hasMany(Platewaste::class);
    }
}
