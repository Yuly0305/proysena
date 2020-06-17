<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   protected $fillable = [
    	'name',
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
