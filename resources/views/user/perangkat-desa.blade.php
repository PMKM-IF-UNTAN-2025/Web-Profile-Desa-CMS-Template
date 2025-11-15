@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Perangkat Desa</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->
    <section id="content" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <h4 class="subjudul text-center mb-5">STRUKTUR ORGANISASI PEMERINTAHAN <br> <span id="nama_desa"></span>
                <br>{{ $strukturperangkatdesa->nama }}</h4>
            <!-- Image Section -->
            <div class="d-flex justify-content-center mb-4">
                <img src="{{ asset('storage/' . $strukturperangkatdesa->gambar_strukturdesa) }}" alt="Desa Image"
                    class="img-fluid rounded" style="object-fit: contain; width: 100%;">
            </div>
        </div>
    </section>
@endsection