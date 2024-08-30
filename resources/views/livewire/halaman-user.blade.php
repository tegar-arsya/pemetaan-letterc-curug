<div>
    <style>
        .container-fluid.bg-primary {
            background-color: #007bff;
            border-bottom: 2px solid #1eff00;
        }
        .d-inline-flex a {
            transition: color 0.3s ease;
        }
        .d-inline-flex a:hover {
            color: #d1ecf1;
        }
        .d-inline-flex a .fab {
            font-size: 1.2rem;
        }
        .d-inline-flex a:hover .fab {
            transform: scale(1.1);
        }
        /* Animasi pada carousel */
.carousel {
  animation: fadeIn 2s;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Efek transisi pada slide */
.carousel-inner {
  transition: transform 0.5s ease-in-out;
}

/* Efek parallax pada gambar */
.carousel-item img {
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
}

/* Efek hover pada elemen */
.carousel-caption h2 {
  transition: transform 0.5s ease-in-out;
}

.carousel-caption h2:hover {
  transform: scale(1.1);
}

/* Efek shadow pada elemen */
.carousel-caption {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Efek transparansi pada elemen */
.carousel-caption h2 {
  opacity: 0.8;
}

.carousel-caption h2:hover {
  opacity: 1;
}

/* Efek motion pada elemen */
.carousel-caption h2 {
  animation: moveUpDown 2s infinite;
}

@keyframes moveUpDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0);
  }
}

/* Efek interaksi pada elemen */
.carousel-caption a {
  transition: background-color 0.5s ease-in-out;
}

.carousel-caption a:hover {
  background-color: #333;
  color: #fff;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Apply the fade-in animation to the .desas-item class */
.desas-item {
    animation: fadeIn 1s ease-out;
}

/* Keyframes for the scale-up animation */
@keyframes scaleUp {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

/* Apply the scale-up animation to the .desa-card class */
.desa-card {
    animation: scaleUp 0.8s ease-out;
}
/* General container styling */
#lahan {
    background-color: #f9f9f9;
}

/* Styling for section titles */
#lahan h1 {
    font-size: 2.5rem;
    color: #333;
    font-weight: 700;
}

/* Styling for counters */
[data-toggle="counter-up"] {
    font-size: 3rem;
    font-weight: 700;
}

/* Add animation to the images */
.img-fluid {
    transition: transform 0.3s ease-in-out;
}

.img-fluid:hover {
    transform: scale(1.1);
}

/* Styling for the statistics section */
.statistics-section {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.statistics-section h5 {
    font-size: 1.25rem;
    color: #ff0000;
    margin-bottom: 0.5rem;
}

.statistics-section h1 {
    font-size: 2.5rem;
    color: #333;
    font-weight: 700;
}

/* Add a shadow and rounded corners to the image container */
.col-lg-5 .d-flex {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
    </style>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="#">FAQs</a>
                        <span class="text-white mx-2">|</span>
                        <a class="text-white px-3" href="#">Help</a>
                        <span class="text-white mx-2">|</span>
                        <a class="text-white pl-3" href="#">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="#" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0"style="background-color: #3498db;">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary" style="font-family: Open Sans;">
                        <span class="text-primary">
                            <img src="{{ url('/') }}/grobogan.png" alt="Logo" style="height: 50px;">
                        </span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active" style="color: #000000; transition: color 0.2s ease;">Home</a>
                        <a href="#visimisi" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Visi Misi</a>
                        <a href="#struktur" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Struktur Organisasi</a>
                        <a href="#infotanah" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Informasi Tanah</a>
                        <a href="#desa" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Data Desa/Kel.</a>
                        <a href="#lahan" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Data Lahan</a>
                        <a href="#potensi" class="nav-item nav-link" style="color: #000000; transition: color 0.2s ease;">Peta Potensi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<!-- Carousel Start -->
<div id="home" class="container-fluid p-0">
  <div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="{{ url('/') }}/img/balaidesacurug.jpeg" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px;">
            <h4 class="text-white text-uppercase mb-md-3">Selamat datang di website</h4>
            <h2 class="display-4 text-white mb-md-4 text-bold text-uppercase ">Desa <br> Curug</h2>
            {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

    <!-- Contact Info Start -->
<div class="container-fluid contact-info mt-5 mb-4">
    <div class="container" style="padding: 0 30px;">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px; padding: 20px;">
                <div class="d-inline-flex">
                    <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-bold" style="font-size: 18px;">Lokasi</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Curug, Tegowanu, Kab. Grobogan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px; padding: 20px;">
                <div class="d-inline-flex text-left">
                    <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-bold" style="font-size: 18px;">Email</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">pertaniankoltim@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px; padding: 20px;">
                <div class="d-inline-flex text-left">
                    <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-bold" style="font-size: 18px;">Telepon</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">0821-2425-1672</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Contact Info End -->

<!-- About Start -->
<div id="visimisi" class="container-fluid py-5" >
    <div class="container pt-0 pt-lg-4">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded" src="{{ url('/') }}/img/balaidesacurug.jpeg" alt="" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                <h6 class="text-secondary text-uppercase font-weight-medium mb-3" style="letter-spacing: 2px;">Tentang Visi Misi</h6>
                <h1 class="mb-4" style="font-size: 36px; font-weight: bold;">Visi</h1>
                <h5 class="font-weight-medium font-italic mb-5" style="color: #666; font-size: 20px;">"Menjadikan Kolaka Timur Sejahtera Bersama Masyarakat Kolaka Timur yang Agamis, Maju, Mandiri dan Berkeadilan"</h5>
                <h1 class="mb-3" style="font-size: 36px; font-weight: bold;">Misi</h1>
                <div class="row">
                    <div class="col-sm-12 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2" style="font-size: 20px;"></i>
                            <p class="text-secondary font-weight-medium m-0" style="font-size: 18px;">Penguatan Tata Kelola Pemerintahan yang Baik, Bersih dan Transparan Melayani Masyarakat</p>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2" style="font-size: 20px;"></i>
                            <p class="text-secondary font-weight-medium m-0" style="font-size: 18px;">Peningkatan Ekonomi Masyarakat dan Produktifitas Pertanian, Perkebunan, Penguatan UMKM, Koperasi, dan Pelaku Usaha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <!-- Testimonial Start -->
    <div id="struktur" class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang </h6>
            <h1 class="display-4 text-center mb-5">Struktur Organisasi</h1>

            {{-- img struktur --}}
            <div class="row">
                {{-- <div class="col-md-12 mb-3">
                    <img class="img-fluid" src="{{ url('/') }}/img/struktur.png" alt="">
                </div> --}}
            </div>
            <div class="owl-carousel testimonial-carousel mt-2">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-1.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-2.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-3.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-4.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Pricing Plan Start -->
    <div id="infotanah" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-primary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Informasi Tanah</h1>
            <div class="row">
                @foreach ($infotanah as $info)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-warning rounded-circle shadow mt-2 mb-4" style="width: 250px; height: 250px; border: 15px solid #cd03ff;">
                            <h3 class="text-primary font-weight-bold">
                                {{ $info->jenis_tanah }}
                            </h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            {{-- 2 kolom 2 baris--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Ketinggian</h5>
                                    <p class="text-muted font-italic">{{ $info->ketinggian }} mdpl</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Kelembaban</h5>
                                    <p class="text-muted font-italic">{{ $info->kelembaban }} %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

<!-- Services Start -->
<div id="desa" class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-primary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
        <h1 class="display-4 text-center mb-5">Desa / Kelurahan</h1>
        <div class="row">
            @foreach($desas as $desa)
            <div class="col-lg-3 col-md-6 pb-1 desas-item">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4 desa-card" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-success shadow rounded-circle mb-4 shadow" style="width: 100px; height: 100px;">
                        <span class="text-warning font-weight-bold">
                            {{ $desa->luas_wilayah }} m<sup>2</sup>
                        </span>
                    </div>
                    <h3 class="font-weight-bold m-0 mb-1 text-uppercase">{{ $desa->nama_desa }}</h3>
                    <h5 class="mt-2">Kecamatan {{ $desa->nama_kecamatan }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->



    <!-- Features Start -->
    <div id="lahan" class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-primary text-uppercase font-weight-medium mb-3">Tentang</h6>
                    <h1 class="mb-4 text-primary">Data Lahan</h1>
                    <p class="text-danger font-weight-bold">Berikut data lahan berdasarkan data pada Desa Curug:</p>
                    <div class="row">
                        <h5 class="font-weight-bold text-success">Total Pemilik Lahan:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-danger" data-toggle="counter-up">{{ $pemiliktanah->count() }}  </h1>
                            <span class="text-center font-weight-bold align-items-center text-danger" style="display:flex">  Orang</span>
                        </div>
                        <h5 class="font-weight-bold text-success">Total Luas Lahan:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-danger" data-toggle="counter-up">{{ $sum_luas_tanah }} </h1>
                            <span class="text-center font-weight-bold align-items-center text-danger" style="display:flex"> m<sup>2</sup></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light h-100 py-5 px-3">
                        <img src="{{ asset('grobogan.png') }}" alt="" class="img-fluid m-2" width="30%">
                        <img src="{{ asset('img/balaidesacurug.jpeg') }}" alt="" class="img-fluid m-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Pricing Plan Start -->
    <div id="potensi" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Peta Potensi</h1>
            <div class="row">
                <div class="col-lg-12 col-sm-12 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        {{-- peta --}}
                                <div class="m-2" id="map" style="height: 600px;" wire:ignore></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Sistem Informasi Geografis Potensi Persawahan</a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="#">#</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

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
</div>

