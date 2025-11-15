@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Lembaga Desa</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Lembaga Desa -->
    <section id="lembaga-desa" class="py-5">
        <div class="container transition-container">
            <!-- Section Title -->
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2 class="fw-bold">Lembaga Desa</h2>
                    <p class="text-muted">Berkenalan dengan lembaga desa yang mendukung kemajuan desa.</p>
                </div>
            </div>
            <!-- Lembaga Cards -->
            <div class="row g-4">
                @if($lembagadesas->isEmpty())
                    <div class="col-12">
                        <p class="text-center text-muted">Data Lembaga Desa Belum Tersedia.</p>
                    </div>
                @else
                    @foreach ($lembagadesas as $lembaga)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="lembaga-card shadow-sm rounded h-100">
                                <!-- Image Container -->
                                <div class="lembaga-img-container position-relative overflow-hidden rounded-top"
                                    style="height: 250px;">
                                    @if($lembaga->gambar_lembaga)
                                    <img src="{{ asset('storage/' . $lembaga->gambar_lembaga) }}"
                                        alt="Foto {{ $lembaga->nama_lembaga }}" class="lembaga-img img-fluid w-100 h-100"
                                        style="object-fit: contain; object-position: center;"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    @else
                                    <div class="d-flex justify-content-center align-items-center bg-light rounded-top w-100 h-100"
                                        style="height: 250px;">
                                        <i class="fas fa-building text-muted" style="font-size: 4rem;"></i>
                                    </div>
                                    @endif
                                    <!-- Fallback Icon -->
                                    <i class="fas fa-building lembaga-icon position-absolute top-50 start-50 translate-middle text-white"
                                        style="display:none; font-size: 3rem;"></i>
                                </div>
                                <!-- Info Container -->
                                <div class="lembaga-info p-3 bg-light rounded-bottom text-center">
                                    <h5 class="lembaga-name mb-2 fw-bold">{{ $lembaga->nama_lembaga }}</h5>
                                    <p class="lembaga-alamat text-muted">{{ $lembaga->alamat_lembaga }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End of Lembaga Desa -->
@endsection
