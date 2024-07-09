<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'adress', 'telephone'];

    public function journeys(){
        return $this->belongsTo('App\Models\Journey');
    }
}
