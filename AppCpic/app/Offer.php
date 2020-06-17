<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
    	'day_time',
    	'date_inscription',
    	'requirements',
    	'program_id',
    ];

    public function program(){
        return $this->belongsTo('App\Program');
    }

     public function trimester(){
        return $this->hasOne('App\Trimester');
    }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
