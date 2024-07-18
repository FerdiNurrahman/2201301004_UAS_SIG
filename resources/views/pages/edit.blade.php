@extends('layout.main')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Data Lokasi</h5>
            
            {{-- Menampilkan Pesan Kesalahan --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('update', $lokasi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_lokasi">Nama Lokasi</label>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="{{ old('nama_lokasi', $lokasi->nama_lokasi) }}" required>
                </div>
                <div class="form-group">
                    <label for="koordinat">Koordinat</label>
                    <textarea class="form-control" id="koordinat" name="koordinat" rows="4" required>{{ old('koordinat', $lokasi->koordinat) }}</textarea>
                </div>                
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" id="jenis" name="jenis" required>
                        <option value="polygon" {{ old('jenis', $lokasi->jenis) == 'polygon' ? 'selected' : '' }}>Polygon</option>
                        <option value="point" {{ old('jenis', $lokasi->jenis) == 'point' ? 'selected' : '' }}>Point</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label for="sekolah">Sekolah</label>
                    <select class="form-control" id="sekolah" name="sekolah" required>
                        <option value="sd" {{ old('sekolah', $lokasi->sekolah) == 'sd' ? 'selected' : '' }}>SD</option>
                        <option value="smp" {{ old('sekolah', $lokasi->sekolah) == 'smp' ? 'selected' : '' }}>SMP</option>
                        <option value="smk" {{ old('sekolah', $lokasi->sekolah) == 'smk' ? 'selected' : '' }}>SMA/SMK</option>
                    </select>
                </div>                
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</section>
@endsection
