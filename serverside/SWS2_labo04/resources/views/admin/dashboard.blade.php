{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Admin')

@section('JS')
@endsection

@section('content')
    <a href="admin/add" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span> Add blogpost
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Added on</th>
                <th>Comments</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($blogposts as $blogpost)
            <tr>
                <th scope="row">{{ $blogpost->id }}</th>
                <td>{{ $blogpost->title }}</td>
                <td>{{ $blogpost->date }}</td>
                <td>{{ $blogpost->numcomments }}</td>
                <td>
                    <a class="btn btn-primary" href="{{@url('/admin/edit/')}}/{{$blogpost->id}}">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{@url('/admin/delete/')}}/{{$blogpost->id}}">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                    </a>
                </td>
            </tr>
            @empty
                <tr><td>No blogposts to show!</td></tr>
        @endforelse
        </tbody>

    </table>

@endsection
