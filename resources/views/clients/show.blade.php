@extends('layouts.app')

@section('content')

    <div class="card mb-4">
        <div class="card-header">
            {{ __('Show Client') }}
            <a class="btn btn-primary float-end" href="{{ route('clients.index') }}"> Back</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $client->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $client->detail }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
