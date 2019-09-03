<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];
}
