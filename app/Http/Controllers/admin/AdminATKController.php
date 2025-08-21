<?php

namespace App\Http\Controllers\admin;

use App\Models\Atk;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class AdminATKController extends Controller
{
public function index(Request $request)
{
    $query = $request->input('q');

    if ($query) {
        $atks = Atk::where('nama', 'like', "%{$query}%")
                    ->orWhere('kategori', 'like', "%{$query}%")
                    ->get();
    } else {
        $atks = Atk::all();
    }

    return view('admin.index', compact('atks'));
}


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
            'nama' => 'required|string',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
             'deskripsi' => 'nullable|string'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/atk'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Simpan ke database
        Atk::create($validated);
    

        return redirect()->route('admin.index')->with('success', 'ATK berhasil ditambahkan');
    }

    public function edit($id)
    {
        $atks = Atk::findOrFail($id);
        return view('admin.edit', compact('atks'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required'
        ]);

        $atks = Atk::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/atk'), $filename);
            $validated['gambar'] = $filename;
        }

        $atks->update($validated);

        return redirect()->route('admin.index')->with('success', 'ATK berhasil diupdate');
    }

    public function destroy($id)
    {
        $atks = Atk::findOrFail($id);
        $atks->delete();
        return redirect()->route('admin.index')->with('success', 'ATK berhasil dihapus');
    }

    public function show($id)
    {
        $atks = Atk::findOrFail($id);
        return view('admin.show', compact('atks'));
    }
}

