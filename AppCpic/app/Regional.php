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

    // public function article(){
    //     return $this->hasOne('App\Article');
    // }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
