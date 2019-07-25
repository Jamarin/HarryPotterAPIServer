<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function blood_status() {
        return $this->belongsTo('App\BloodStatus');
    }

    public function race() {
        return $this->belongsTo('App\Race');
    }

    public function school_house() {
        return $this->belongsTo('App\SchoolHouse');
    }

    public function actors() {
        return $this->belongsToMany('App\Actor');
    }

    public function data() {
        return $this->belongsToMany('App\Data');
    }

    public function medias() {
        return $this->belongsToMany('App\Media');
    }

    public function wands() {
        return $this->belongsToMany('App\Wand');
    }

    public function job() {
        return $this->belongsToMany('App\Job');
    }
}
