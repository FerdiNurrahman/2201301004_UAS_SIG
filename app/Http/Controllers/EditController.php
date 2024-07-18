<?php

namespace App\Http\Controllers;

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
            'nama_lokasi' => 'required',
            'koordinat' => 'required',
            'jenis' => 'required',
            'sekolah' => 'required',
        ]);

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
