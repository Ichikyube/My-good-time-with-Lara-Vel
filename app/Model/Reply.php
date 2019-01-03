<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Like;
use App\Model\Question;

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
    public function like()
    {
        return $this->hasMany(like::class);
    }
}
