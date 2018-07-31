<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	protected $fillable = [
		'user_id', 'courseName', 'slug', 'dayCalendar', 'month', 'instructorName', 'startDate',
		'courseAddress', 'excerpt', 'description', 'status'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getFileUrlAttribute(){
    	return env('AWS_URL') . $this->file;
    }
}
