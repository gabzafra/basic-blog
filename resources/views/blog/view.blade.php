@extends('layouts.master')

@section('content')
@include('partials.post', ['post' => $post])
<hr/>
<section id="comments">
  @foreach ($post->comments()->get() as $comment)
    <div class="comment">
      <p>{{ $comment->title }} says...</p>
      <blockquote>{{ $comment->content }}</blockquote>
    </div>
  @endforeach
</section>
<section>
  <h3 class="title">Add a comment</h3>
  <form action="{{ URL::route('createComment',['id' => $post->id])}}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
      <input type="text" name="name" class="form-control" placeholder="Your name">
    </div>
    <div class="form-group">
      <textarea name="content" class="form-control" placeholder="Write here.."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</section>
@endsection
