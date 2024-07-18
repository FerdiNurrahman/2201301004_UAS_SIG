<!-- resources/views/pages/tampil.blade.php -->
@extends('layout.main')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
            <a href="{{ route('data.create') }}" class="btn btn-success mb-3">Tambah Data</a>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lokasi</th>
                        <th>Koordinat</th>
                        <th>Jenis</th>
                        <th>Sekolah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lokasi as $lokasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lokasi->nama_lokasi }}</td>
                        <td>{{ $lokasi->koordinat }}</td>
                        <td>{{ $lokasi->jenis }}</td>
                        <td>
                            @if ($lokasi->sekolah == 'smk')
                                SMA/SMK
                            @else
                                {{ $lokasi->sekolah }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit', $lokasi->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <td>
                                <a href="{{ route('data.hapus', $lokasi->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
