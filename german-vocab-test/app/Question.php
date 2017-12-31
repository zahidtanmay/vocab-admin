<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'choice_one', 'choice_two', 'choice_three', 'choice_four', 'answer_one', 'answer_two', 'question_type'];
    public function question_type()
    {
        return $this->hasOne('App\Question_type');
    }
}
