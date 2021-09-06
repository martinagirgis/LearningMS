<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupsUsers extends model
{
    protected $table = 'groups_users';
    protected $fillable = [
        'user_id',
        'group_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function group()
    {
        return $this->belongsTo('App\models\Groups','group_id');
    }
}
