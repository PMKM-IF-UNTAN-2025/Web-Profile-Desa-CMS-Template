@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Pengumuman</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Pengumuman -->
    <section id="pengumuman" class="py-5 bg-light">
        <div class="container">
            <h2 class="subjudul text-center mb-5 fw-bold">Pengumuman</h2>
            <div class="row g-4 justify-content-center">
                @if($pengumuman->isEmpty())
                    <div class="col-12">
                        <p class="text-center text-muted">Data Pengumuman Belum Tersedia.</p>
                    </div>
                @else
                    @foreach ($pengumuman as $pengumuman)
                        <div class="col-lg-4 col-md-6">
                            <!-- Card Klikable -->
                            <a href="/detail-pengumuman/{{ $pengumuman->id }}" class="text-decoration-none">
                                <div class="card shadow-sm border-0 h-100">
                                    <!-- Gambar -->
                                    <img src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}" 
                                        style="height: 200px; object-fit: contain; object-position: center;" 
                                        class="card-img-top rounded-top">
                                    <!-- Konten -->
                                    <div class="card-body d-flex flex-column p-3">
                                        <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 0.8rem;">
                                            <!-- Ikon Tanggal -->
                                            <span>
                                                <i class="fas fa-calendar-alt" style="margin-right: 8px;"></i>
                                                {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j F Y') }}
                                            </span>
                                            <!-- Ikon Penulis -->
                                            <span>
                                                <i class="fas fa-user" style="margin-right: 8px;"></i>
                                                {{ $pengumuman->penulis ?? 'Admin' }}
                                            </span>
                                        </div>
                                        <!-- Judul -->
                                        <h5 class="card-title fw-bold text-dark mb-1" style="margin-top:3px;">
                                            {{ $pengumuman->judul }}
                                        </h5>
                                        <!-- Deskripsi Singkat -->
                                        <p class="card-text text-muted small">
                                            {!! \Illuminate\Support\Str::limit($pengumuman->deskripsi_singkat, 250) !!}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End of Pengumuman -->
@endsection
