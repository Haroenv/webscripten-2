{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{@url('/')}}/">My Blog</a> &raquo; Blogposts</p>

    <section class="blogposts">
        @if($blogposts)
            @forelse($blogposts as $blogpost)
                <article>
                    <h1><a href="{{@url('/blogposts')}}/{{ $blogpost->id }}" title="{{ $blogpost->title }}">{{ $blogpost->title }}</a></h1>
                    <footer><p>Written by <em><a href="{{@url('/authors')}}/{{ $blogpost->user_id }}">{{ $blogpost->firstname }} {{ $blogpost->lastname }}</a></em> on <em>{{ $blogpost->date }}</em></p></footer>
                </article>
            @empty
                <p>No blogposts to show!</p>
            @endforelse

        @endif
    </section>
@endsection