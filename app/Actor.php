<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name', 'birth_date'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
