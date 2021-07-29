<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserAnswers extends Model
{
    protected $table = 'user_answers';
    protected $fillable = [
        'all_quize_id',
        'user_id',
        'mark',
        'wrog_answers'
    ];
}
