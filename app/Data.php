<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'key', 'value', 'type'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
