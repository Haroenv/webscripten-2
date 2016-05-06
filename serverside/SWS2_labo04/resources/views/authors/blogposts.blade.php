{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Authors &raquo; Detail &raquo; Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{ @url('/') }}/">My Blog</a> &raquo; <a href="{{ @url('/authors') }}/authors">Authors</a> &raquo; <a href="{{ @url('/authors') }}/{{ $author->user_id }}">{{ $author->firstname }} {{ $author->lastname }}</a> &raquo; Blogposts</p>

    <section class="authorblogposts">
        <h1>Blogposts by &ldquo;{{ $author->firstname }} {{ $author->lastname }}&rdquo;</h1>
        @if($blogposts)
            <ul>
               @forelse($blogposts as $blogpost)
                <li><a href="{{ @url('/blogposts') }}/{{ $blogpost->id }}">{{ $blogpost->title }}</a></li>
                @empty
                    <p>No blogposts to show!</p>
                @endforelse
            </ul>
        @endif
    </section>

    <p><a href="{{ @url('/') }}/authors/{{ $author->user_id }}">&larr; Back to author detail</a></p>
@endsection