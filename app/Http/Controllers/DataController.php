<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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

    // Custom validation for koordinat based on jenis
    $validator = Validator::make($request->all(), [
        'koordinat' => function ($attribute, $value, $fail) use ($request) {
            if ($request->jenis == 'polygon') {
                $pattern = '/^\[\[(\[\d+(\.\d+)?,-\d+(\.\d+)?\],?)+\]\]$/';
                if (!preg_match($pattern, $value)) {
                    $fail('Data yang anda masukkan bukan polygon');
                }
            } elseif ($request->jenis == 'point') {
                $pattern = '/^-?\d+(\.\d+)?,\s*-?\d+(\.\d+)?$/';
                if (!preg_match($pattern, $value)) {
                    $fail('Data anda bukan point');
                }
            }
        },
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

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
