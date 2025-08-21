<?php

namespace App\Http\Controllers;

use App\Models\Atk;
use GuzzleHttp\Psr7\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ATKController extends Controller
{

    //tampil
       public function index() {
        $atks = Atk::paginate(15);
        return view('atk.index', compact('atks'));
       }

       public function filter($kategori)
{
    $atks = ATK::where('kategori', $kategori)->paginate(15);
    return view('atk.index', compact('atks', 'kategori'));
} 

      public function tabel() {
        $atks = Atk::paginate(15);
        return view('atk.tabel',  compact('atks'));
      }


    public function show($id)
    {
        $atks = Atk::findOrFail($id);
        return view('atk.show', compact('atks'));
    }

    public function search()
    {
        $query = request('q');
        $atks = Atk::where('nama', 'like', "%$query%")->get();
        return view('atk.index', compact('atks'));
    }
}