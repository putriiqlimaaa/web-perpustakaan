<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtbuku = buku::all();
        return view('buku.data_buku', compact('dtbuku'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        buku::create([
            'kode' => $request->kode,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok,
        ]);

        return redirect('/data_buku')->with('success', 'Data buku sukses disimpan');
    }

    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        return view('edit.edit_buku', compact('buku'));
    }

    public function destroy($id)
{
    $buku = buku::findOrFail($id);
    $buku->delete();

    return redirect('/data_buku')->with('success', 'Data buku berhasil dihapus');
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
        ]);

        buku::whereId($id)->update($validatedData);

        return redirect('/data_buku')->with('success', 'Data buku berhasil diperbarui');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    $dtbuku = buku::where('kode', 'LIKE', "%$query%")
                    ->orWhere('judul', 'LIKE', "%$query%")
                    ->orWhere('penulis', 'LIKE', "%$query%")
                    ->orWhere('penerbit', 'LIKE', "%$query%")
                    ->orWhere('tahun_terbit', 'LIKE', "%$query%")
                    ->orWhere('stok', 'LIKE', "%$query%")
                    ->get();

    if ($dtbuku->isEmpty()) {
        return view('buku.data_buku', ['dtbuku' => $dtbuku])->with('message', 'No results found.');
    } else {
        return view('buku.data_buku', ['dtbuku' => $dtbuku]);
    }
}

}
