<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('data_barang', ['barang' => $barang]);
    }
    
    
    public function create()
    {
        return view('tambah_barang');
    }

    public function store(Request $request)
    {
        Barang::create([
            'code' => e($request->input('code')),
            'name' => e($request->input('name')),
            'qty' => e($request->input('qty')),
        ]);
        return redirect()->route('barang.index');
    }


    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('edit_barang', ['barang' => $barang]);
    }


    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->code = e($request->input('code'));
        $barang->name = e($request->input('name'));
        $barang->qty = e($request->input('qty'));
        $barang->save();

        return redirect()->route('barang.index');
    }


    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
