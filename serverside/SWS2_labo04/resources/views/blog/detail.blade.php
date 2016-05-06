{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts &raquo; Detail')

@section('content')
    <p class="breadcrumb"><a href="{{@url('/')}}/">My Blog</a> &raquo; Blogposts</p> &raquo; <a href="{{@url('/')}}/blog">Blogposts</a> &raquo; {{ $blogpost->title }}</p>

    <section class="blogpost">
        <article>
            <h1>{{ $blogpost->title }}</h1>
            <footer><p>Written by <em><a href="{{@url('/authors')}}/{{ $blogpost->user_id }}">{{ $blogpost->firstname }} {{ $blogpost->lastname }}</a></em> on <em>{{ $blogpost->date }}</em></p></footer>
            <blockquote>{!! $blogpost->content !!}</blockquote>
            <p>Comments: <a href="{{@url('/blogposts')}}/{{ $blogpost->id }}/comments">{{ $blogpost->numcomments }}</a></p>
        </article>
    </section>
    <p><a href="{{@url('/blog')}}">&larr; Back to blog overview</a></p>
@endsection