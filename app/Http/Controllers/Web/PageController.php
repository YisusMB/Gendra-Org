<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;

class PageController extends Controller
{
	public function inicio(){
		return view('welcome');
	}

    public function cursos(){
    	$courses = Course::all();
    	return view('layouts.pages.cursos')
    	->with('courses', $courses);
    }

    public function nosotros(){
    	return view('layouts.pages.nosotros');
    }

    public function proyectos(){
    	$profiles = Profile::all();
    	return view('layouts.pages.proyectos')
    	->with('profiles', $profiles);
    }

    public function curso($slug){
    	$course = Course::find('slug', $slug);
    	return view('layouts.pages.curso')->with('course', $course);
    }
}
