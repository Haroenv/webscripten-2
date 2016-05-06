{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Admin')

@section('JS')
@endsection

@section('content')
   @forelse($blogposts as $blogpost)
        <li><a href="{{ @url('/blogposts') }}/{{ $blogpost->id }}">{{ $blogpost->title }}</a></li>
        @empty
            <p>No blogposts to show!</p>
        @endforelse
@endsection
