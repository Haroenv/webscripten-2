{{-- extend the parent tpl --}}
@extends('layouts.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; Blog &raquo; Overview')


@section('content')
    <p class="text-right"><a href="{{ @url('/admin/add') }}" class="btn btn-success btn-large"><i class="glyphicon glyphicon-plus"></i> Add new blogpost</a></p>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Added on</th>
            <th class="text-center">Comments</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if($blogposts)
            @forelse($blogposts as $blogpost)
                <tr>
                    <td>{{ $blogpost->id }}</td>
                    <td><a href="{{ @url('/blogposts') .'/'.$blogpost->id }}">{{ $blogpost->title }}</a></td>
                    <td>{{$categories[$blogpost->category_id]}}</td>
                    <td>{{ date('d F, Y', strtotime($blogpost->date)) }}</td>
                    <td class="text-center">{{ $blogpost->numcomments }}</td>
                    <td class="text-right">
                        {!! Form::open(array('url' => 'admin/delete'.'/'. $blogpost->id, 'method' => 'POST', 'class' => "delete")) !!}
                        {!! csrf_field() !!}
                        {{-- spoof a DELETE request from the form--}}
                        {!! method_field('DELETE') !!}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                        {!! Form::close() !!}
                    </td>
                    <td class="text-right">
                        <a href="{{ @url('/admin/edit') .'/'. $blogpost->id }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>&nbsp;</td>
                    <td>No blogposts to show! </td>
                </tr>
            @endforelse
        @endif
        </tbody>
    </table>

    <script>
        jQuery(function($) {
            $('form.delete').on('submit', function(e) {
                return confirm('Sure you want to delete this blogpost?');
            });
        });
    </script>

@endsection
