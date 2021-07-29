<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    protected $fillable = [
        'type',
        'url',
        'description',
        'groups_teacher_id',
        'group_id',
        'is_publisher',
    ];
}
