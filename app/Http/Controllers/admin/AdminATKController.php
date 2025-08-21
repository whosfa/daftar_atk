<?php

namespace App\Http\Controllers\admin;

use App\Models\Atk;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class AdminATKController extends Controller
{

    //tampil
public function index(Request $request)
{
    $query = $request->input('q');

    if ($query) {
        $atks = Atk::where('nama', 'like', "%{$query}%")
                    ->orWhere('kategori', 'like', "%{$query}%")
                    ->paginate(15);
    } else {
        $atks = Atk::paginate(15);
    }   

    return view('admin.index', compact('atks'));
}

       public function filter($kategori)
{
    $atks = ATK::where('kategori', $kategori)->paginate(15);
    return view('admin.index', compact('atks', 'kategori'));
} 
    //tambah
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
             'deskripsi' => 'nullable|string',
             'lokasi'=> 'required|string',
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

    //edit
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
            'deskripsi' => 'required',
            'lokasi'=> 'required',
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

    //hapus
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

