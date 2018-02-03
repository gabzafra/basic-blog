@extends('layouts.master')
@section('header-right')
<a href="{{ URL::route('newPost') }}" class="btn btn-default btn-lg" style="margin-top : 30px;"><span class="glyphicon glyphicon-pencil"></span></a>
@endsection
@section('content')
  @foreach ($posts as $post)
    @include('partials.post', ['post' => $post])
  @endforeach
@endsection
