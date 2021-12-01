<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = "DASHBOARD";
        
        return view('admin.dashboard',[
            'posts' => Post::latest()->get(),
            'users' => User::get(),
            'categories' => Category::get(),
            'title' => $title,
        ]);
    }
    
    public function posts()
    {

        return view('admin.dashboard-posts',[
            'posts' => Post::latest()->get(),
            'title' => "POSTS",
        ]);
    }
    
    public function users()
    {
        return view('admin.dashboard-users',[
            'users' => User::get(),
            'title' => "USERS"
        ]);
    }
    
    public function categories()
    {
        return view('admin.dashboard-categories',[
            'posts' => Post::latest()->get(),
            'users' => User::get(),
            'categories' => Category::get(),
            'title' => "CATEGORIES"
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
