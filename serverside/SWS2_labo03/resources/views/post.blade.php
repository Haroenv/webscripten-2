@extends('master')
@section('title','My Blog &raquo; Ut placeat …')
@section('content')
    <p class="breadcrumb"><a href="/">My Blog</a> &raquo; Blogposts</p> &raquo; <a href="/">Blogposts</a> &raquo; Ut placeat dignissimos vero magni qui soluta.</p>

    <section class="blogpost">
        <article>
            <h1>Ut placeat dignissimos vero magni qui soluta.</h1>
            <footer><p>Written by <em><a href="/authors/3">Jan Janssens</a></em> on <em>2010-04-30 14:34:14</em></p></footer>
            <blockquote>{!! $post->content !!}</blockquote>
            <p>Comments: <a href="#">2</a></p>
        </article>
    </section>
    <p><a href="/">&larr; Back to blog overview</a></p>
@endsection
