<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trimester extends Model
{
    protected $fillable = [
    	'number',
    	'date_start',
    	'date_end',
    	'offer_id',
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
