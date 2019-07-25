<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $casts = [
        'active' => 'boolean',
        'deleted' => 'boolean'
    ];

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
