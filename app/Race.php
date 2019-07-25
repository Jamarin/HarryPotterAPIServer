<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'name'
    ];

    public function characters() {
        return $this->hasMany('App\Character');
    }
}
