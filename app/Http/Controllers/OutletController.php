<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Outlet;

class OutletController extends Controller
{
    public function index()
    {
        $outlet = Outlet::all();
        return view('data_outlet', ['outlet' => $outlet]);
    }
    
    
    public function create()
    {
        return view('tambah_outlet');
    }

    public function store(Request $request)
    {
        Outlet::create([
            'name' => e($request->input('name')),
            'address' => e($request->input('address')),
        ]);
        return redirect()->route('outlet.index');
    }


    public function edit($id)
    {
        $outlet = Outlet::find($id);
        return view('edit_outlet', ['outlet' => $outlet]);
    }


    public function update(Request $request, $id)
    {
        $outlet = Outlet::find($id);
        $outlet->name = e($request->input('name'));
        $outlet->address = e($request->input('address'));
        $outlet->save();

        return redirect()->route('outlet.index');
    }


    public function destroy($id)
    {
        $outlet = Outlet::find($id);
        $Outlet->delete();
        return redirect()->route('Outlet.index');
    }
}
