{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Search')

@section('content')
    <p class="breadcrumb"><a href="{{@url('/')}}/">My Blog</a> &raquo; Search</p>

@endsection
