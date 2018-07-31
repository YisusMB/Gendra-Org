<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Profile;
use App\Http\Requests\ProfileStoreRequest;
use App\Http\Requests\ProfileUpdateRequest;


class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->paginate(10);
        return view('admin.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileStoreRequest $request)
    {
        $slug = str_slug($request->profileName);
        
        $profile = new Profile;
        $profile->slug = $slug;
        $profile->file = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('profileImages'), $profile->file);

        $profile->fill($request->all());
        $profile->save();

        return redirect()->route('profiles.edit', $profile->id)
        ->with('info', 'Perfil creado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('admin.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request, $id)
    {
        $slug = str_slug($request->profileName);
        
        $profile = Profile::find($id);
        $profile->slug = $slug;
        $profile->file = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('profileImages'), $profile->file);

        $profile->fill($request->all());
        $profile->save();

        return redirect()->route('profiles.edit', $profile->id)
        ->with('info', 'Perfil actualizado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');

    }
}
