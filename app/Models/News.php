<?php

namespace App\Models;

class News extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'view_count', 'order', 'excerpt', 'slug','image'];
    
    public function user(){
        
        return $this->belongsTo(User::class);
    }
}
