<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
    	'name','hobby','address'
    ];

    public function subjects()
    {
    	return $this->hasMany('App\Subject');
    }
}
