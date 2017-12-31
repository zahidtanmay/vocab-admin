<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_type extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
