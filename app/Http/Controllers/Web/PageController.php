<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;
use App\Profile;

class PageController extends Controller
{
	public function inicio(){
		return view('welcome');
	}

    public function cursos(){
    	$courses = Course::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
    	return view('layouts.pages.cursos', compact('courses'));
    }

    public function nosotros(){
    	return view('layouts.pages.nosotros');
    }

    public function proyectos(){
    	$profiles = Profile::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
    	return view('layouts.pages.proyectos', compact('profiles'));
    }

    public function curso($slug){
    	$course = Course::where('slug', $slug)->first();
    	return view('layouts.pages.curso', compact('course'));
    }

    public function perfil($slug){
        $profile = Profile::where('slug', $slug)->first();
        return view('layouts.pages.perfil', compact('profile'));
    }

}
