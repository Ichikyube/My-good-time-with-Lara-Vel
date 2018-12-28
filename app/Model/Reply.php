<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(question::class);
    }
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
    public function like(){
        return $this->hasMany(like::class);
    }
}
