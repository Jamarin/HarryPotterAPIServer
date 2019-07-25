<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
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

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
