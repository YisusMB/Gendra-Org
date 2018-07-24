<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $fillable = [
		'user_id', 'profileName', 'slug', 'dateOfIncorporation', 'languajes', 'dateOfGraduation', 
		'file', 'description', 'status'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
