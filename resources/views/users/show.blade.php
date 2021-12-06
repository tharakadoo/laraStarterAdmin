@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Show User') }}
            <a class="btn btn-primary float-end" href="{{ route('users.index') }}"> Back</a>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge me-1 bg-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </div>

                </div>

            </div>
        </div>

        {{--        <div class="card-footer">--}}
        {{--            {{ $users->links() }}--}}
        {{--        </div>--}}
    </div>
@endsection
