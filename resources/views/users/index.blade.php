<?php $breadcrumb = '
<li class="breadcrumb-item active"><span>Users</span></li>'; ?>
@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Users') }}
            <a class="btn btn-success float-end" href="{{ route('users.create') }}"> Create New User</a>
        </div>

        <div class="card-body">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered table-sm">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="280px">Action</th>
                </tr>

                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <label class="badge me-1 bg-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $data->render() !!}
        </div>

{{--        <div class="card-footer">--}}
{{--            {{ $users->links() }}--}}
{{--        </div>--}}
    </div>
@endsection
