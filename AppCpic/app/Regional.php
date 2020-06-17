<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $fillable = [
    	'name',
    	'address',
    	'phone',
    	'department_id',
    ];

    public function department(){
        return $this->belongsTo('App\Department');
    }

     public function center(){
        return $this->hasOne('App\Center');
    }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
