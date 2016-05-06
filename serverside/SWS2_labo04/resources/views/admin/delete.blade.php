{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Admin &raquo; Delete a post')

@section('JS')
@endsection

@section('content')
<p>Are you sure you want to delete ”{{$post[0]->title}}”</p>
<p><a href="{{@url('/admin')}}" class="btn btn-primary">no</a><a href="admin" class="btn btn-danger">yes</a></p>
@endsection
