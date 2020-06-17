<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 
        'email',
        'phone',
        'birthdate',
        'photo',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function event(){
        return $this->hasMany('App\Event');
    }

    public function program(){
        return $this->hasMany('App\Program');
    }


    // public function scopeNames($users, $q) {
    //     if (trim($q)) {
    //         $users->where('fullname', 'LIKE', "%$q%")
    //               ->orWhere('email', 'LIKE', "%$q%")
    //               ->orWhere('phone', 'LIKE', "%$q%");
    //     }
    // }
}
