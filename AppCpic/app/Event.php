<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'name',
    	'multimedia',
    	'description',
    	'date_start',
    	'date_end',
    	'admin_id',
    	'center_id',
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
