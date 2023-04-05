<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $perpustakaans = Perpustakaan::paginate(5);
        $posts = Perpustakaan::orderBy('kode_bukuu')->paginate(6);
        return view('perpustakaans.index', ['user'=>$user], compact('perpustakaans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('perpustakaans.create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_bukuu' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Perpustakaan::create($request->all());

        return redirect()->route('perpustakaans.index' )->with('Berhasil', 'Data Berhasil Ditambahkan');
    }

    public function show($kode_bukuu)
    {
        $Perpustakaan = Perpustakaan::find($kode_bukuu);
        return view('perpustakaans.detail', compact('Perpustakaan'));
    }

    public function edit($kode_bukuu)
    {
        $Perpustakaan = Perpustakaan::find($kode_bukuu);
        return view('perpustakaans.detail', compact('Perpustakaan'));
    }

    public function update(Request $request, $kode_bukuu)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Perpustakaan::find($kode_bukuu)->update($request->all());
        return redirect()->route('perpustakaans.index')->with('Berhasil', 'Data Berhasil Diupdate');
    }

    public function destroy($kode_bukuu)
    {
        Perpustakaan::find($kode_bukuu)->delete();
        return redirect()->route('perpustakaans.index')->with('Berhasil', 'Data Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $keyword = $request->search;
        $perpustakaans = Perpustakaan::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('perpustakaans.index', ['user'=>$user] , compact('perpustakaans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
