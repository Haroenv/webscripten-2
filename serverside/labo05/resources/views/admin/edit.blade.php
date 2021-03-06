{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; Blog &raquo; Edit Blogpost')

@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    @endsection

    @section('content')
            <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        <!-- New Blogpost form -->
        {!! Form::open(array('url' => 'admin/edit' .'/'. $blogpost->id, 'method' => 'POST')) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', $blogpost->title, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category', $categories, $blogpost->category_id, ['placeholder' => 'Pick a category...']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('blog_content', 'Content:') !!}
            {!! Form::textarea('blog_content', $blogpost->content, array('class' => 'form-control', 'rows' => '10')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('image') !!}
        </div>
        {!! csrf_field() !!}
        <a href="{{ @url('/admin') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

        {!! Form::close() !!}
    </div>
@endsection
