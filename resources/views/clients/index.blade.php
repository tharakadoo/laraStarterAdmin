@extends('layouts.app')

@section('content')

    <div class="card mb-4">
        <div class="card-header">
            {{ __('Add New Client') }}
            @can('client-create')
                <a class="btn btn-success float-end" href="{{ route('clients.create') }}"> Create New Client</a>
            @endcan
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
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->detail }}</td>
                        <td>
                            <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('clients.show',$client->id) }}">Show</a>
                                @can('client-edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('clients.edit',$client->id) }}">Edit</a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('client-delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $clients->links() !!}

        </div>
    </div>

@endsection
