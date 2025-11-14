@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Kegiatan</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Kegiatan -->
    <section id="kegiatan" class="py-5">
        <div class="container transition-container">
            <div class="row text-center mb-5">
                <h2 class="subjudul fw-bold">Galeri Kegiatan Desa</h2>
                <p class="text-muted">Lihat kegiatan yang telah diselenggarakan oleh <span id="nama_desa"></span>.</p>
            </div>
            <div class="row g-4">
                @forelse ($kelolakegiatans as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-kegiatan position-relative rounded shadow-sm overflow-hidden">
                            <!-- Image -->
                            <img class="img-fluid" src="{{ asset('storage/' . $item->gambar_kegiatan) }}"
                                alt="{{ $item->nama_kegiatan }}">
                            <!-- Overlay -->
                            <div
                                class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 d-flex justify-content-center align-items-center p-3">
                                <h5 class="text-white fw-bold text-center">{{ $item->nama_kegiatan }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada kegiatan yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End of Kegiatan -->
@endsection
