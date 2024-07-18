<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class MapController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        // Mengambil semua data dari model Lokasi

        $pointFeatures = [];
        $polygonFeatures = [];
        // Menyiapkan array untuk menyimpan fitur point dan polygon

        foreach ($lokasi as $item) {
            // Melakukan iterasi pada setiap item dalam $lokasi
            if ($item->jenis === 'point') {
                // Jika jenis item adalah 'point'
                $coordinates = explode(',', $item->koordinat);
                // fungsi explode adalaha Memisahkan string koordinat menjadi array yaitu dipisahkan menggunakan coma
                $pointFeatures[] = [
                    'type' => 'Feature',
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$coordinates[1], $coordinates[0]], // Menukar lat(garis lintang,lurus)-lng untuk Leaflet sebagai point
                    ],
                    'properties' => [
                        'nama_lokasi' => $item->nama_lokasi,
                        'sekolah' => $item->sekolah,
                        // Menambahkan properti nama_lokasi dan sekolah
                    ],
                ];
            } elseif ($item->jenis === 'polygon') {
                // Jika jenis item adalah 'polygon'
                $coordinates = json_decode($item->koordinat);
                // Menguraikan string JSON koordinat menjadi array
                $polygonFeatures[] = [
                    'type' => 'Feature',
                    'geometry' => [
                        'type' => 'Polygon',
                        'coordinates' => $coordinates,
                    ],
                    'properties' => [
                        'nama_lokasi' => $item->nama_lokasi,
                        'sekolah' => $item->sekolah,
                        // Menambahkan properti nama_lokasi dan sekolah
                    ],
                ];
            }
        }

        $geojsonData = [
            'type' => 'FeatureCollection',
            'features' => array_merge($pointFeatures, $polygonFeatures),
            // Membuat koleksi fitur GeoJSON dengan menggabungkan fitur point dan polygon
        ];

        return view('pages.map', [
            'geojsonData' => json_encode($geojsonData),
            // Mengirimkan data GeoJSON ke view 'pages.map' dalam bentuk JSON
        ]);
    }
}
