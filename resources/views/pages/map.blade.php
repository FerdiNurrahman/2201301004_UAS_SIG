@extends('layout.main')

@section('content')
<div class="form-group">
    <label for="filter-sekolah">Filter Sekolah</label>
    <select class="form-control" id="filter-sekolah">
        <option value="all">Semua</option>
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="smk">SMK</option>
    </select>
</div>

<div id="map" style="height: 600px;"></div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map("map").setView([-4.019807042589833, 114.73838255768648], 11);

        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        var geojsonData = {!! $geojsonData !!};
        var geojsonLayer = L.geoJSON(geojsonData, {
            pointToLayer: function (feature, latLng) {
                var iconUrl;
                switch (feature.properties.sekolah) {
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
                }

                var customIcon = L.icon({
                    iconUrl: iconUrl,
                    iconSize: [30, 35],
                    iconAnchor: [16, 16],
                    popupAnchor: [0, -16]
                });

                return L.marker(latLng, { icon: customIcon });
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.nama_lokasi);
            },
            style: function (feature) {
                if (feature.geometry.type === 'Polygon') {
                    switch (feature.properties.sekolah) {
                        case 'sd':
                            return { fillOpacity: 0.2, weight: 1, opacity: 1, color: "#FF0000" };
                        case 'smp':
                            return { fillOpacity: 0.2, weight: 1, opacity: 1, color: "#0000FF" };
                        case 'smk':
                            return { fillOpacity: 0.5, weight: 1, opacity: 0.8, color: "#808080" };
                        default:
                            return { fillOpacity: 0.5, weight: 1, opacity: 0.8, color: "#808080" };
                    }
                }
            }
        }).addTo(map);

        document.getElementById('filter-sekolah').addEventListener('change', function(e) {
            var selectedType = e.target.value;
            map.removeLayer(geojsonLayer);

            if (selectedType === "all") {
                geojsonLayer = L.geoJSON(geojsonData, geojsonOptions).addTo(map);
            } else {
                var filteredData = geojsonData.features.filter(function(feature) {
                    return feature.properties.sekolah === selectedType;
                });

                geojsonLayer = L.geoJSON({ type: 'FeatureCollection', features: filteredData }, geojsonOptions).addTo(map);
            }
        });

        var geojsonOptions = {
            pointToLayer: function (feature, latLng) {
                var iconUrl;
                switch (feature.properties.sekolah) {
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
                }

                var customIcon = L.icon({
                    iconUrl: iconUrl,
                    iconSize: [30, 35],
                    iconAnchor: [16, 16],
                    popupAnchor: [0, -16]
                });

                return L.marker(latLng, { icon: customIcon });
            },
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.nama_lokasi);
            },
            style: function (feature) {
                if (feature.geometry.type === 'Polygon') {
                    switch (feature.properties.sekolah) {
                        case 'sd':
                            return { fillOpacity: 0.2, weight: 1, opacity: 1, color: "#FF0000" };
                        case 'smp':
                            return { fillOpacity: 0.2, weight: 1, opacity: 1, color: "#0000FF" };
                        case 'smk':
                            return { fillOpacity: 0.5, weight: 1, opacity: 0.8, color: "#808080" };
                        default:
                            return { fillOpacity: 0.5, weight: 1, opacity: 0.8, color: "#808080" };
                    }
                }
            }
        };
    });
</script>
@endsection
