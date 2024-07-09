<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    public function travelers(){
        return $this->hasMany('App\Models\Traveler');
    }

    public function origins(){
        return $this->belongsTo('App\Models\Origin');
    }

    public function destinations(){
        return $this->belongsTo('App\Models\Destination');
    }
}
