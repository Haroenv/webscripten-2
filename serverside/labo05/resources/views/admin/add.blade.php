{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; Blog &raquo; Add Blogpost')

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
        {!! Form::open(array('url' => 'admin/add', 'method' => 'POST', 'files'=>true)) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', '', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category', $categories, null, ['placeholder' => 'Pick a category...']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('blog_content', 'Content:') !!}
            {!! Form::textarea('blog_content', '', array('class' => 'form-control', 'rows' => '10')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('images[]', array('multiple'=>true)) !!}
        </div>
        {!! csrf_field() !!}
        <a href="{{ @url('/admin') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

        {!! Form::close() !!}
    </div>
@endsection
