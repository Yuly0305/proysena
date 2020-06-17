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
    	'user_id',
    	'center_id',
    	'level_formation',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function level_formation(){
        return $this->belongsTo('App\LevelFormation');
    }

    public function center(){
        return $this->belongsTo('App\Center');
    }

    public function offer(){
        return $this->hasMany('App\Offer');
    }

    // public function scopeNames($categories, $q) {
    //     if (trim($q)) {
    //         $categories->where('name', 'LIKE', "%$q%");
    //     }
    // }
}
