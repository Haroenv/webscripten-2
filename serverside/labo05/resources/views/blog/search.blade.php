{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Search')

@section('content')
    <p class="breadcrumb"><a href="{{@url('/')}}/">My Blog</a> &raquo; Search</p>

    {!! Form::open(array('url' => '/search', 'method' => 'GET')) !!}

    <div class="form-group">
        {!! Form::text('q', '', array('class' => 'form-control','placeholder' => 'What are you looking for?')) !!}
    </div>
    <div class="form-group date">
        {!! Form::label('from', 'From:') !!}
        {!! Form::date('from', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group date">
        {!! Form::label('to', 'To:') !!}
        {!! Form::date('to', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::select('category', $categories, null, ['placeholder' => 'Pick a category...']) !!}
    </div>
    {!! Form::submit('search', array('class' => 'btn btn-primary pull-right')) !!}

    {!! Form::close() !!}
    <div>
    @if($blogposts)
        @forelse($blogposts as $blogpost)
            <article>
                <h1><a href="{{@url('/blogposts')}}/{{ $blogpost->id }}" title="{{ $blogpost->title }}">{{ $blogpost->title }}</a></h1>
                <footer>
                    <p>Written by <em><a href="{{@url('/authors')}}/{{ $blogpost->user_id }}">{{ $blogpost->firstname }} {{ $blogpost->lastname }}</a></em> on <em>{{ $blogpost->date }}</em>
                        &vert; Category: <em> <a href="#">{{ $blogpost->name }}</a></em>
                    </p>
                </footer>
            </article>
        @empty
            <p>No blogposts to show!</p>
        @endforelse
    @endif
    </div>
@endsection
