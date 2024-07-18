@extends('layout.main') 
{{-- Mengindikasikan bahwa halaman ini menggunakan template dari layout.main --}}

@section('content')
{{-- Menentukan section untuk konten utama halaman --}}
<div id="map" style="height: 600px;"></div>
{{-- Membuat elemen div dengan id "map" dan tinggi 600 piksel untuk menampilkan peta --}}
@endsection
{{-- Menutup section konten utama --}}

@section('scripts')
{{-- Menentukan section untuk menyertakan script --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Menambahkan event listener yang akan dijalankan saat DOM telah dimuat
        var map = L.map("map").setView([-4.019807042589833, 114.73838255768648], 11);
        // Membuat peta Leaflet dengan view awal pada koordinat tertentu dan zoom level 17

        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            // Menambahkan layer ubin dari OpenStreetMap
            maxZoom: 19,
            // Menentukan zoom maksimal
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            // Menambahkan atribusi OpenStreetMap
        }).addTo(map);
        // Menambahkan layer ke peta

        var geojsonData = {!! $geojsonData !!};
        // Menyertakan data GeoJSON dari variabel PHP ke JavaScript

        L.geoJSON(geojsonData, {
            pointToLayer: function (feature, latLng) {
                // Fungsi untuk menentukan ikon yang digunakan untuk setiap titik
                var iconUrl;
                switch (feature.properties.sekolah) {
                    // Memilih ikon berdasarkan properti "sekolah" pada fitur
                    case 'sd':
                        iconUrl = 'icon/sd.png';
                        break;
                    case 'smp':
                        iconUrl = 'icon/smp.png';
                        break;
                    case 'smk':
                        iconUrl = 'icon/smk.png';
                        break;
                    default:
                        iconUrl = 'icon/default.png';
                        // Default ikon jika tipe sekolah tidak dikenal
                }

                var customIcon = L.icon({
                    // Membuat ikon kustom dengan URL ikon yang dipilih
                    iconUrl: iconUrl,
                    iconSize: [30, 35],
                    // Ukuran ikon
                    iconAnchor: [16, 16],
                    // Titik jangkar ikon (koordinat tengah bawah)
                    popupAnchor: [0, -16]
                    // Titik jangkar popup
                });

                return L.marker(latLng, { icon: customIcon });
                // Mengembalikan marker dengan ikon kustom pada koordinat latLng
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.nama_lokasi);
                // Menambahkan popup ke setiap fitur dengan nama lokasi dari properti fitur
            },
            style: function (feature) {
                // Fungsi untuk menentukan gaya dari setiap fitur
                if (feature.geometry.type === 'Polygon') {
                    // Jika fitur adalah Polygon
                    switch (feature.properties.sekolah) {
                        // Memilih gaya berdasarkan tipe sekolah
                        case 'sd':
                            return {
                                fillOpacity: 0.2,
                                weight: 1,
                                opacity: 1,
                                color: "#FF0000" // Warna merah untuk SD
                            };
                        case 'smp':
                            return {
                                fillOpacity: 0.2,
                                weight: 1,
                                opacity: 1,
                                color: "#0000FF" // Warna biru untuk SMP
                            };
                        case 'smk':
                            return {
                                fillOpacity: 0.5,
                                weight: 1,
                                opacity: 0.8,
                                color: "#808080" // Warna abu-abu untuk SMK
                            };
                        default:
                            return {
                                fillOpacity: 0.5,
                                weight: 1,
                                opacity: 0.8,
                                color: "#808080" // Warna abu-abu untuk default
                            };
                    }
                }
            }
        }).addTo(map);
        // Menambahkan layer GeoJSON ke peta dengan gaya dan ikon yang telah ditentukan
    });
</script>
@endsection
{{-- Menutup section scripts --}}
