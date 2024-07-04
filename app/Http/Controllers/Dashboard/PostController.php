<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $post = Post::find(3);
    //dd($post->category->title);


/*         Post::create(['title'=>'test title2',
                      'slug'=>'test slug2',
                      'content'=>'test content2',
                      'category_id'=>1,
                      'description'=>'test description2',
                      'posted'=>'yes',
                      'image'=>'test image2',

    ]);

    $post=Post::find(2);
    $post->update(['title'=>'test title5',
                  'slug'=>'test slug5',
                  'content'=>'test content5',
                  'image'=>'test image5',

]); */
        return 'INDEX';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
