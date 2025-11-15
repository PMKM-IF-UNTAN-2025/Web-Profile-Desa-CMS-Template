@extends('layouts.pengumuman')

@section('child')
<div class="container-fluid px-3 px-md-4 pt-4" style="margin-bottom: 25px;">
    <div class="row justify-content-center">
        <!-- Konten Utama -->
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-lg mb-4" style="border-radius: 10px;">
                <div class="card-header bg-transparent text-center text-md-start" style="border-bottom: none; padding: 20px;">
                    <h1 class="card-title mb-3" style="font-size: 1.5rem; font-weight: bold; line-height: 1.2;">
                        {{ $pengumuman->judul }}
                    </h1>
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between text-muted flex-wrap" style="font-size: 0.9rem;">
                        <!-- Kolom Tanggal -->
                        <div class="d-flex align-items-center mb-2 mb-md-0">
                            <i class="fas fa-calendar-alt me-2" style="font-size: 1rem;"></i>
                            <span>{{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j F Y') }}</span>
                        </div>
                        <!-- Kolom Penulis -->
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user me-2" style="font-size: 1rem;"></i>
                            <span>{{ $pengumuman->penulis ?? 'Admin' }}</span>
                        </div>
                    </div>                    
                </div>
                @if(!empty($pengumuman->gambar_pengumuman))
                <img 
                    src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}" 
                    alt="Gambar Pengumuman" 
                    class="card-img-top" 
                    style="object-fit: contain; width: 100%; height: auto; max-height: 400px; border-radius: 10px 10px 0 0;">
                @endif
                <div class="card-body" style="padding: 20px;">
                    <p class="card-text" style="font-size: 1rem; line-height: 1.7; color: #555;">
                        {!! $pengumuman->deskripsi_singkat !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
