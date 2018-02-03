<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog.index', [
        'posts' => Post::all()
      ]);
    }

    public function newPost()
    {
      return view('blog.new');
    }

    public function createPost(Request $request)
    {
      $post = new Post();
      $post->title = $request->input('title');
      $post->content = nl2br($request->input('content'));
      $post->save();

      return redirect()->route('viewPost', ['id' => $post->id]);
    }

    public function viewPost($id)
    {
      $post = Post::findOrFail($id);

      return view('blog.view', [
        'post' => $post
      ]);
    }

    public function createComment(Request $request, $id)
    {
      $post = Post::findOrFail($id);

      $comment = new Comment();
      $comment->title = $request->input('name');
      $comment->content = nl2br($request->input('content'));

      $post->comments()->save($comment);

      return redirect()->route('viewPost', ['id' => $post->id]);
    }
}
