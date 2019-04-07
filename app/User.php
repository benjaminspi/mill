<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function mills(){

        return $this->belongsToMany(Mill::class, "favmills"); # Model not named according to convention, so 2nd param required to specify model

    }

    public function favmills(){

        return $this->hasMany(Favmills::class); # Model not named according to convention, so 2nd param required to specify model

    }

}
