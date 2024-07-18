<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class EditController extends Controller
{
    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);

        return view('pages.edit', [
            'lokasi' => $lokasi
        ]);
    }

    public function update(Request $request, $id)
{
    $lokasi = Lokasi::findOrFail($id);

    // Validasi data jika diperlukan
    $request->validate([
        'nama_lokasi' => 'required|string|max:255',
        'koordinat' => 'required|string',
        'jenis' => 'required|in:polygon,point',
        'sekolah' => 'required|in:sd,smp,smk',
    ]);

    // Validasi kustom untuk koordinat berdasarkan jenis
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

    // Simpan perubahan
    $lokasi->nama_lokasi = $request->nama_lokasi;
    $lokasi->koordinat = $request->koordinat;
    $lokasi->jenis = $request->jenis;
    $lokasi->sekolah = $request->sekolah;
    $lokasi->save();

    // Redirect dengan pesan sukses atau tambahkan notifikasi jika perlu
    return redirect()->route('data.index')->with('success', 'Data lokasi berhasil diperbarui.');
}
}
