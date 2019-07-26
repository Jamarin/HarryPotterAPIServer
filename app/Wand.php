<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wand extends Model
{
    protected $hidden = ['pivot'];

    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'name'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
