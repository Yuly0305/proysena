<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
    	'code',
    	'name',
    	'type_career',
    	'description',
    	'title_get',
    	'level_education',
    	'duration',
    	'working_day',
    	'modality',
    	'state',
    	'admin_id',
    	'center_id',
    	'level_formation',
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
