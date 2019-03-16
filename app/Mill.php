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

    }

}
