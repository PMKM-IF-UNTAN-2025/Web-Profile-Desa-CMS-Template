@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Administrasi</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Informasi Layanan -->
    <section id="informasi-layanan" class="py-5">
        <div class="container transition-container">
            <div class="row text-center mb-5">
                <h2 class="fw-bold">Informasi Layanan</h2>
                <p class="text-muted">Pelayanan administrasi yang tersedia di <span id="nama_desa"></span>.</p>
            </div>
            <div class="row g-4">
                @foreach ($layananadministrasis as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0 rounded-lg h-100">
                            <div class="card-body text-center">
                                <!-- Service Title with Envelope Icon positioned at the top -->
                                <div class="d-flex flex-column align-items-center mb-3">
                                    <i class="fa-solid fa-envelope fa-3x mb-2"></i> <!-- Envelope Icon -->
                                    <h5 class="card-title fw-bold">{{ $item->nama_layanan }}</h5> <!-- Layanan Title -->
                                </div>

                                <!-- Service Description -->
                                <p class="card-text text-muted mb-3">{{ $item->deskripsi }}</p>

                                <!-- Accordion for Requirements -->
                                <div class="accordion" id="accordion-{{ $item->id }}">
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="heading-{{ $item->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->id }}"
                                                aria-expanded="false" aria-controls="collapse-{{ $item->id }}">
                                                Persyaratan
                                            </button>
                                        </h6>
                                        <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading-{{ $item->id }}"
                                            data-bs-parent="#accordion-{{ $item->id }}">
                                            <div class="accordion-body text-start">
                                                {!! $item->persyaratan !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Informasi Layanan -->
@endsection
