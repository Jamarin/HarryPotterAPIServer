<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodStatus extends Model
{
    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'name'
    ];
}
