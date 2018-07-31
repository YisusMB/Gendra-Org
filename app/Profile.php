<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $fillable = [
		'user_id', 'profileName', 'slug', 'dateOfIncorporation', 'languages', 'dateOfGraduation', 
		'description', 'status'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getFileUrlAttribute(){
    	return env('AWS_URL') . $this->file;
    }
}
