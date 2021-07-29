<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'name','image'
    ];
}
