<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StoreSearchRequest;
use App\Http\Requests\UpdateSearchRequest;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $posts = Post::latest();
        $users = User::all();
        
        if(request('search')) {
            $posts->where('title' , 'like', '%'. request('search') .'%')
                ->orWhere('description' , 'like', '%'. request('search') .'%')
                ->orWhere('place' , 'like', '%'. request('search') .'%')
                ->orWhere('user_id' , 'like', '%'. request('search') .'%')
                ->orWhere('category_id' , 'like', '%'. request('search') .'%');
            
                
            // $posts->where('name' , 'like', '%'. request('search') .'%')
            //     ->orWhere('username' , 'like', '%'. request('search') .'%')
            //     ->orWhere('email' , 'like', '%'. request('search') .'%');
        }

        return view('user.search',[
            "posts" => $posts->get (),
            // "users" => $users->get(),
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
     * @param  \App\Http\Requests\StoreSearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSearchRequest  $request
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearchRequest $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
