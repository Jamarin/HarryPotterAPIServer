<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wand extends Model
{
    protected $fillable = [
        'name'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
