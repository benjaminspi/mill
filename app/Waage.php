<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waage extends Model
{
    protected $fillable = [
    	'name',
    	'beschreibung'
    ];

    public function mill(){

    	return $this->belongsTo(Mill::class);

    }

}
