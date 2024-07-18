@extends('layout.main')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Data Lokasi</h5>
            <form action="{{ route('update', $lokasi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_lokasi">Nama Lokasi</label>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="{{ $lokasi->nama_lokasi }}" required>
                </div>
                <div class="form-group">
                    <label for="koordinat">Koordinat</label>
                    <textarea class="form-control" id="koordinat" name="koordinat" rows="4" required>{{ $lokasi->koordinat }}</textarea>
                </div>                
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" id="jenis" name="jenis" required>
                        <option value="polygon" {{ $lokasi->jenis == 'polygon' ? 'selected' : '' }}>Polygon</option>
                        <option value="point" {{ $lokasi->jenis == 'point' ? 'selected' : '' }}>Point</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label for="sekolah">Sekolah</label>
                    <select class="form-control" id="sekolah" name="sekolah" required>
                        <option value="sd" {{ $lokasi->sekolah == 'sd' ? 'selected' : '' }}>SD</option>
                        <option value="smp" {{ $lokasi->sekolah == 'smp' ? 'selected' : '' }}>SMP</option>
                        <option value="smk" {{ $lokasi->sekolah == 'smk' ? 'selected' : '' }}>SMA/SMK</option>
                    </select>
                </div>                
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="{{ route('data.index') }}" class="btn btn-secondary">kembali</a>
            </form>
        </div>
    </div>
</section>
@endsection
