<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelFormation extends Model
{
    protected $fillable = [
    	'name',
    	'duration',
    	'productive_stage',
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
