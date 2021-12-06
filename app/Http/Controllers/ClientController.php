<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:client-list|client-create|client-edit|client-delete', ['only' => ['index','show']]);
        $this->middleware('permission:client-create', ['only' => ['create','store']]);
        $this->middleware('permission:client-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:client-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('clients.index',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success','Client created successfully.');
    }

    public function show(Client $client)
    {
        return view('clients.show',compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit',compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success','Client updated successfully');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success','Client deleted successfully');
    }



}
