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
    	'user_id',
    	'center_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function center(){
        return $this->belongsTo('App\Center');
    }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
