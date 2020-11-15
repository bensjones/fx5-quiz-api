<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_description',
        'answer_option_1',
        'answer_option_2',
        'answer_option_3',
        'answer_option_4',
        'correct_answer',
        'wrong_answer_response'
    ];
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}