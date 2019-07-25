<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $hidden = ['pivot'];

    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

    protected $fillable = [
        'name', 'birth_date'
    ];

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
