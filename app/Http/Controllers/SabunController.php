<?php

namespace App\Http\Controllers;

use App\Models\Sabun;
use Illuminate\Http\Request;

class SabunController extends Controller
{
    public function index()
    {
        $sabuns = Sabun::all();
        return view('sabun.index', compact('sabuns'));
    }

    public function create()
    {
        return view('sabun.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sabun' => 'required',
            'merk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Sabun::create($request->all());
        return redirect('/sabun')->with('success', 'Data Sabun berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sabun = Sabun::findOrFail($id);
        return view('sabun.edit', compact('sabun'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sabun' => 'required',
            'merk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $sabun = Sabun::findOrFail($id);
        $sabun->update($request->all());
        return redirect('/sabun')->with('success', 'Data Sabun berhasil diupdate.');
    }

    public function destroy($id)
    {
        Sabun::destroy($id);
        return redirect('/sabun')->with('success', 'Data Sabun berhasil dihapus.');
    }
}