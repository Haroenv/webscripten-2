@extends('master')
@section('title','My Blog')
@section('content')
    @foreach ($posts as $post)
    <article>
      <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
      <p>Written by <a href="/authors/{{$post->author_id}}">{{$post->firstname}} {{$post->lastname}}</a> on <time datetime="{{$post->date}}">{{$post->date}}</time></p>
      <hr>
    </article>
    @endforeach
@endsection
