@extends('master')
@section('title')
My Blog &raquo; {{$post->title}}
@endsection
@section('content')
    <p class="breadcrumb"><a href="/">My Blog</a> &raquo; Blogposts</p> &raquo; <a href="/">Blogposts</a> &raquo; {{$post->title}}</p>

    <section class="blogpost">
        <article>
            <h1>{{$post->title}}</h1>
            <footer><p>Written by <em><a href="/authors/{{$post->author_id}}">{{$post->firstname}} {{$post->lastname}}</a></em> on <em>{{$post->created_at}}</em></p></footer>
            <blockquote>{!! $post->content !!}</blockquote>
            <p>Comments: <a href="comments">{{$post->numcomments}}</a></p>
        </article>
    </section>
    <p><a href="/">&larr; Back to blog overview</a></p>
@endsection
