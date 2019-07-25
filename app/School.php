<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'name'
    ];

    public function organization() {
        return $this->belongsTo('App\Organization');
    }

    public function school_houses() {
        return $this->hasMany('App\SchoolHouse');
    }
}
