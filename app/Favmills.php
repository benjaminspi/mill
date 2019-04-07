<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favmills extends Model
{
    protected $fillable = [
    	'user_id',
    	'mill_id'
    ];

}
