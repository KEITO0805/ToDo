<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'period',
    'check',
    'task',
    'user_id',
    ];
}
