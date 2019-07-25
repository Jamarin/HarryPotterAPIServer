<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'name'
    ];

    public function media_type() {
        return $this->belongsTo('App\MediaType');
    }

    public function characters() {
        return $this->belongsToMany('App\Character');
    }
}
