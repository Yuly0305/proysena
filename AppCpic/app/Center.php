<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = [
    	'number',
    	'name',
    	'color',
    	'regional_id',
    ];

    public function regional(){
        return $this->belongsTo('App\Regional');
    }

    public function event(){
        return $this->hasMany('App\Event');
    }

    public function program(){
        return $this->hasMany('App\Program');
    }
    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
