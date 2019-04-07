<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mill extends Model
{

    // protected $fillable = [
    // 	'title',
    // 	'description'
    // ];

    protected $guarded = [];

    public function waages(){

    	return $this->hasMany(Waage::class);
    	// return $this->hasMany(Waage::class, "mill_id"); // optional: define the foreign key

    }

    public function users(){

    	return $this->belongsToMany(User::class, "favmills"); # Model not named according to convention, so 2nd param required to specify model

    }

}
