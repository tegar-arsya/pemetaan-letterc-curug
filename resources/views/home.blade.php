@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-lg">
                <div class="card-header bg-dark text-white text-center py-4">
                    <img class="img-fluid mb-3" src="{{ asset('grobogan.png') }}" alt="logo" width="70px" height="70px">
                    <h3 class="mt-2">Sistem Informasi Geografis (SIG) Potensi Sawah</h3>
                    <h1 class="text-uppercase font-weight-bold">KABUPATEN Grobogan</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- Info Tanah --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-primary text-white text-center py-3">
                                    <i class="fas fa-landmark fa-2x"></i>
                                    <h5 class="card-title mt-2">Jenis Tanah</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($infotanah) }}</h1>
                                </div>
                            </div>
                        </div>

                        {{-- Pemilik Lahan --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-warning text-white text-center py-3">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h5 class="card-title mt-2">Pemilik Lahan</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($pemiliklahan) }}</h1>
                                </div>
                            </div>
                        </div>

                        {{-- Desa --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-success text-white text-center py-3">
                                    <i class="fas fa-building fa-2x"></i>
                                    <h5 class="card-title mt-2">Desa</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($desa) }}</h1>
                                </div>
                            </div>
                        </div>

                        {{-- Potensi --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-danger text-white text-center py-3">
                                    <i class="fas fa-globe fa-2x"></i>
                                    <h5 class="card-title mt-2">Potensi</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($potensi) }}</h1>
                                </div>
                            </div>
                        </div>
{{--                         
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-danger text-white text-center py-3">
                                    <i class="fa fa-download fa-2x"></i>
                                    <h5 class="card-title mt-2">Download</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <a href="{{ route('download.pdf') }}" class="btn btn-primary btn-block">Download PDF</a>
                                </div>
                            </div>
                        </div> --}}
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
