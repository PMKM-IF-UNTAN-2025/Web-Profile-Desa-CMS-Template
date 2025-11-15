@extends('layouts.layout')

@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Publik</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->
    
    <section id="slider-otomatis" class="py-5 mb-5">
        <div class="container-fluid shadow rounded px-5 py-4">
            <!-- Section Title -->
            <div class="row mb-4 justify-content-center text-center">
                <div class="col-12">
                    <h2 class="subjudul fw-bold">Fasilitas Pendidikan</h2>
                    <p class="text-muted">Berbagai fasilitas pendidikan yang tersedia untuk mendukung kemajuan pembelajaran.</p>
                </div>
            </div>
            
            @if($fasilitasPendidikan->isEmpty())
                <div class="col-12">
                    <p class="text-center text-muted">Data Fasilitas Pendidikan Belum Tersedia.</p>
                </div>
                @else
                <!-- Carousel -->
                <div id="carouselOtomatis" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($fasilitasPendidikan->chunk(2) as $index => $chunk)
                            <button type="button" data-bs-target="#carouselOtomatis"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
        
                    <!-- Content -->
                    <div class="carousel-inner">
                        @foreach ($fasilitasPendidikan->chunk(2) as $index => $chunk)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="row justify-content-center g-4">
                                    @foreach ($chunk as $fasilitas)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <a href="{{ $fasilitas->url_alamat }}" class="text-decoration-none">
                                                <div class="card shadow-sm border-0 rounded h-100">
                                                    @if($fasilitas->gambar_fasilitas)
                                                    <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}"
                                                        alt="{{ $fasilitas->nama_fasilitas }}" class="card-img-top rounded-top"
                                                        style="height: 250px; object-fit: contain; object-position: center;">
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center bg-light rounded-top w-100 h-100"
                                                        style="height: 250px;">
                                                        <i class="fas fa-school text-muted" style="font-size: 4rem;"></i>
                                                    </div>
                                                    @endif
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title fw-bold" style="font-size:1.2rem">{{ $fasilitas->nama_fasilitas }}</h5>
                                                        <p class="card-text text-muted">{{ $fasilitas->deskripsi_fasilitas }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
        
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOtomatis" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOtomatis" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
        </div>
    </section>
    
   
    <!-- Slider Otomatis -->
    <section id="slider-otomatis" class="py-5 mb-5">
        <div class="container-fluid shadow rounded px-5 py-4">
            <!-- Section Title -->
            <div class="row mb-4 justify-content-center text-center">
                <div class="col-12">
                    <h2 class="subjudul fw-bold">Fasilitas Publik</h2>
                    <p class="text-muted">Berbagai fasilitas publik yang tersedia untuk mendukung kemajuan desa.</p>
                </div>
            </div>
            @if($fasilitasPublik->isEmpty())
                <div class="col-12">
                    <p class="text-center text-muted">Data Fasilitas Publik Belum Tersedia.</p>
                </div>
            @else
                <!-- Carousel -->
                <div id="carouselOtomatis1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($fasilitasPublik->chunk(2) as $index => $chunk)
                            <button type="button" data-bs-target="#carouselOtomatis"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
        
                    <!-- Content -->
                    <div class="carousel-inner">
                        @foreach ($fasilitasPublik->chunk(2) as $index => $chunk)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="row justify-content-center g-4">
                                    @foreach ($chunk as $fasilitas)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <a href="{{ $fasilitas->url_alamat }}" class="text-decoration-none">
                                                <div class="card shadow-sm border-0 rounded h-100">
                                                    <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}"
                                                        alt="{{ $fasilitas->nama_fasilitas }}" class="card-img-top rounded-top"
                                                        style="height: 250px; object-fit: contain; object-position: center;">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title fw-bold" style="font-size:1.2rem">{{ $fasilitas->nama_fasilitas }}</h5>
                                                        <p class="card-text text-muted">{{ $fasilitas->deskripsi_fasilitas }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOtomatis1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOtomatis1" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
        </div>
    </section>
    <!-- End of Slider Otomatis -->
@endsection
