<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.index', [
            'id' => Auth::id(),
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.profile', [
            'categories' => Category::get(),
            'user' => User::findorFail($id),
            'posts' => Post::where('user_id', $id)->latest()->get(),
        ]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('user.edit-profile', [
            'user' => User::findorFail($id),
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'username' => "required|unique:users,username,{$user->id}",
            'username' => ['required', 'string', 'max:255','unique:users'],
            'school' => ['required', 'string', 'max:255','nullable'],
            'organization' => ['required', 'string', 'max:255','nullable'], 
            'company' => ['required', 'string', 'max:255','nullable'],
            // 'phone_number' => "required|unique:users,phone_number,{$user->id}",
            'phone_number' => ['required', 'string'],
            // 'profile_picture' => ['image', 'file','nullable'],
            // 'email' => "required|string|email|unique:users,email,{$user->id}",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // if ($request->file('profile_picture')) {
        //     $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile-picture');
        // }

        

        User::where('id', auth()->user()->id)->update($validatedData);     
        
        // return redirect('/');

        return redirect()->route('profile', [Auth::id()])->with('succes', 'Your profile has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        
        // return redirect()->route('profile', [Auth::id()])
        // ->with('succes', 'Your post has been Deleted');

        return redirect()->back()
        ->with('succes', 'User has been Deleted');
    }

   
}
