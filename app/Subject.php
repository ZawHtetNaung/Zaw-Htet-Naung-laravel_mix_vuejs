<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $fillable = [
    	'student_id', 'name', 'date'
    ];

    public function students()
    {
    	return $this->belongsTo('App\Student');
    }
}
