<!-- resources/views/pages/tambah.blade.php -->
@extends('layout.main')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Lokasi</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('data.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_lokasi">Nama Lokasi</label>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="{{ old('nama_lokasi') }}" required>
                </div>
                <div class="form-group">
                    <label for="koordinat">Koordinat</label>
                    <textarea class="form-control" id="koordinat" name="koordinat" required>{{ old('koordinat') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" id="jenis" name="jenis" required>
                        <option value="polygon" {{ old('jenis') == 'polygon' ? 'selected' : '' }}>Polygon</option>
                        <option value="point" {{ old('jenis') == 'point' ? 'selected' : '' }}>Point</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sekolah">Sekolah</label>
                    <select class="form-control" id="sekolah" name="sekolah" required>
                        <option value="sd" {{ old('sekolah') == 'sd' ? 'selected' : '' }}>SD</option>
                        <option value="smp" {{ old('sekolah') == 'smp' ? 'selected' : '' }}>SMP</option>
                        <option value="smk" {{ old('sekolah') == 'smk' ? 'selected' : '' }}>SMK/SMA</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('data.index') }}" class="btn btn-secondary">kembali</a>
            </form>
        </div>
    </div>
</section>
@endsection
