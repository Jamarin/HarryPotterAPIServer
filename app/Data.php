<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'key', 'value', 'type'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
