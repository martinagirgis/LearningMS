<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GroupsTeachers extends Model
{
    protected $table = 'groups_teachers';
    protected $fillable = [
        'teacher_id',
        'group_id',
        'is_publisher',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\models\Teacher','teacher_id');
    }

    public function group()
    {
        return $this->belongsTo('App\models\Groups','group_id');
    }
}
