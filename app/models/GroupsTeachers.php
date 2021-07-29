<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GroupsTeachers extends Model
{
    protected $table = 'groups_teachers';
    protected $fillable = [
        'user_id',
        'group_id',
        'is_publisher',
    ];
}
