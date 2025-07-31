<?php

namespace App\Http\Controllers\admin;

use App\Models\Atk;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class AdminATKController extends Controller
{
    public function index()
    {
        $atks = Atk::all();
        return view('admin.index', compact('atks'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer'
        ]);

        Atk::create($request->all());
        return redirect()->route('admin.index')->with('success', 'ATK berhasil ditambahkan');
    }

    public function edit($id)
    {
        $atks = Atk::findOrFail($id);
        return view('admin.edit', compact('atks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer'
        ]);

        $atks = Atk::findOrFail($id);
        $atks->update($request->all());

        return redirect()->route('admin.index')->with('success', 'ATK berhasil diupdate');
    }

    public function destroy($id)
    {
        $atks = Atk::findOrFail($id);
        $atks->delete();
        return redirect()->route('admin.index')->with('success', 'ATK berhasil dihapus');
    }
}

