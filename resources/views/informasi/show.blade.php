@extends('layouts.public')

@section('title', $berita->judul)

@section('content')

<section class="py-5">

    <div class="container" style="max-width:900px;">
    <span class="badge bg-info mb-2">
        Berita
    </span>
        {{-- Judul --}}
        <h1 class="fw-bold mb-3">
            {{ $berita->judul }}
        </h1>

        {{-- Tanggal --}}
        <p class="text-muted mb-4">
            <i class="bi bi-calendar-event"></i>
            {{ $berita->created_at->format('d F Y') }}
        </p>

        {{-- Gambar --}}
        @if($berita->gambar)
            <img
                src="{{ asset('storage/'.$berita->gambar) }}"
                class="img-fluid rounded-4 shadow mb-4"
                style="width:100%;max-height:500px;object-fit:cover;">
        @endif

        {{-- Ringkasan --}}
        @if($berita->ringkasan)
            <div class="alert alert-light border-start border-4 border-info mb-4">
                {{ $berita->ringkasan }}
            </div>
        @endif

        {{-- Isi --}}
        <div style="font-size:18px; line-height:1.9;">
            {!! nl2br(e($berita->isi)) !!}
        </div>

        {{-- Tombol kembali --}}
        <div class="mt-5">
            <a href="{{ route('informasi.index') }}" class="btn-main">
                ← Kembali ke Informasi
            </a>
        </div>

    </div>

</section>

@endsection