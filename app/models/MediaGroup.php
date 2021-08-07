<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MediaGroup extends Model
{
    protected $table = 'media_groups';

    protected $fillable = [
        'uid',
        'description',
        'groups_teacher_id',
        'group_id',
        'is_publisher',
    ];

    public function mediaa()
    {
        return $this->hasMany('App\models\Media','group_uid','uid');
    }
}
