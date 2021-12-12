<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
        return view('clients.index');
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

    public function getDT()
    {
        //return Datatables::of(Client::query())->make(true);
        $data = Client::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = ' <a class="btn btn-info btn-sm" href="'. route('clients.show',$row->id) .'">Show</a> ';

                if(auth()->user()->can('client-edit')){
                    $btn .= '<a class="btn btn-primary btn-sm" href="'. route('clients.edit',$row->id) .'">Edit</a>  ';
                }

                if(auth()->user()->can('client-delete')){
                    $btn .= '<a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm">Delete</a> ';
                }

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function client_delete(Request $request) {
        $affected = DB::table('clients')
            ->where('id', $request->id)
            ->delete();
        return response()->json(['status'=>'1', 'msg'=>'Deleted successfully!']);
    }



}
