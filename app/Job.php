<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
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
