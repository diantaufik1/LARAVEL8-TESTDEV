<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku/index', [
            'buku' => $buku,
        ]);
    }
    public function tambah()
    {
        return view('buku/tambah');
    }
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'nama_buku' => 'required',
            'rilis' => 'required'
        ]);
        Buku::create($validateData);
        return redirect('buku');
    }

    public function delete($id)
    {
        $delete = Buku::find($id);
        $delete->delete();
        return redirect('buku');
    }
}
