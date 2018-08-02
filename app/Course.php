<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	protected $fillable = [
		'user_id', 'courseName', 'slug', 'instructorName', 'start_date', 'finalization_date',
		'courseAddress', 'excerpt', 'description', 'status'


	];

	protected $dates = [
		'start_date', 'finalization_date'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getFileUrlAttribute(){
    	return env('AWS_URL') . $this->file;
    }
}
