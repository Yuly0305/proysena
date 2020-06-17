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

    public function program(){
        return $this->hasOne('App\Program');
    }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
