@extends('layouts.master')

@section('content')
  <h3>Add a blog post</h3>
  <form action="{{ URL::route('createPost') }}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
      <input name="title" type="text" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
      <textarea name="content" class="form-control" placeholder="Write here"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
