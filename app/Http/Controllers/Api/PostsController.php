<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use App\Http\Requests\CreatePostRequest;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return $posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
      $post = new Post;
      $post->title = $request->title;
      $post->content = $request->content;
      // $post->user_id = $request->user()->id;
      $post->save();
      return redirect('api/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, $id)
    {
      $post = Post::find($id);
      $post->title = $request->title;
      $post->content = $request->content;
      $post->save();
      return redirect('api/posts/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect("api/posts");
    }
}
