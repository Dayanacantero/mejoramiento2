<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    public function travelers(){
        return $this->belongsTo('App\Models\Traveler');
    }

    public function origins(){
        return $this->hasMany('App\Models\Origin');
    }

    public function destinations(){
        return $this->hasMany('App\Models\Destination');
    }
}
