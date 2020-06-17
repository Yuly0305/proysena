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

    // public function article(){
    //     return $this->hasOne('App\Article');
    // }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
