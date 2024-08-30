<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Peta Potensi') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- map1 --}}
                                <div id="map" style="width: 100%; height: 600px;" wire:ignore></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        // document.addEventListener('livewire:load', () => {
            // Initialize the map and set its view to a specific location and zoom level
            var map = L.map('map').setView([-7.090480234043234, 110.91272630826613], 12);
            
            // Add OpenStreetMap tiles to the map
            var googleSat = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com">Google Maps</a>'
            }).addTo(map);

            var googleLabels = L.tileLayer('https://{s}.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com">Google Maps</a>'
            }).addTo(map);

            // Function to generate a random color
            function getRandomColor() {
                return '#' + Math.floor(Math.random() * 16777215).toString(16);
            }

            // Fetch and render existing polygons
            var petas = {!! json_encode($petas->toArray()) !!};
            petas.forEach(function(item) {
                var cords = JSON.parse(item['batas_lahan']);
                var coordinates = cords.geometry.coordinates[0];

                // Reverse the coordinates as Leaflet expects [lat, lng] instead of [lng, lat]
                coordinates.forEach(function(coord) {
                    coord.reverse();
                });

                // Create polygon and add to the map
                var polygon = L.polygon(coordinates, {
                    color: getRandomColor(),
                    fillColor: getRandomColor(),
                    fillOpacity: 0.8
                }).addTo(map);

                // Bind a popup to the polygon with additional information
                polygon.bindPopup(
                    '<b>ID</b>: ' + item['id'] + '<br>' +
                    '<b>Desa:</b> ' + item['nama_desa'] + '<br>' +
                    '<b>Pemilik:</b> ' + item['nama_pemiliklahan'] + '<br>' +
                    '<b>Jenis Tanah:</b> ' + item['jenis_tanah'] + '<br>' +
                    '<b>Ketinggian:</b> ' + item['ketinggian'] + ' mdpl<br>' +
                    '<b>Kelembaban:</b> ' + item['kelembaban'] + '%<br>' +
                    '<b>Luas:</b> ' + item['luas_lahan'] + ' m²'
                );
            });

            // Add Leaflet-Geoman controls for drawing and editing polygons
            map.pm.addControls({
                position: 'topleft',
                drawCircle: false,
                drawMarker: false,
                drawPolyline: false,
                drawRectangle: false,
                drawCircleMarker: false,
                drawPolygon: true,
                cutPolygon: false,
                editMode: true,
                dragMode: false,
                removalMode: true,
            });

            // Event listeners for Geoman actions
            map.on('pm:create pm:edit pm:remove', function(e) {
                var layer = e.layer;
                var data = layer.toGeoJSON();
                var dataString = JSON.stringify(data);
                @this.set('batas_lahan', dataString);
            });
        // });
    </script>
    @endpush
</div>
