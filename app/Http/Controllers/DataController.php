<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class DataController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();

        return view('pages.tampil', [
            'lokasi' => $lokasi
        ]);
    }

    public function create()
    {
        return view('pages.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'koordinat' => 'required|string',
            'jenis' => 'required|in:polygon,point',
            'sekolah' => 'required|in:sd,smp,smk',
        ]);

        Lokasi::create($request->all());

        return redirect()->route('data.index')->with('success', 'Lokasi berhasil ditambahkan.');
    }

    public function hapus($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->delete();

        return redirect()->route('data.index')->with('success', 'Data lokasi berhasil dihapus.');
    }
}
