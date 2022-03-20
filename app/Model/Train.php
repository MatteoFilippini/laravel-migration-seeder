<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'start_stat',
        'end_stat',
        'start_time',
        'end_time',
        'num_train',
        'carriages'
    ];
}
