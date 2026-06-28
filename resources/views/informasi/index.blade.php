@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.public')

@section('title', 'Informasi Sekolah')

@section('content')

<style>
    .page-title{
        font-size:42px;
        font-weight:800;
        margin-bottom:40px !important;
        color:#222;
    }

    .breadcrumb-custom{
        font-size:15px;
        color:#888;
    }

    .breadcrumb-custom a{
        text-decoration:none;
        color:#666;
    }

    .breadcrumb-custom span{
        color:#177A95;
        font-weight:600;
    }

    .filter-btn{
        border:2px solid #177A95;
        background:#fff;
        color:#177A95;
        padding:10px 22px;
        border-radius:14px;
        font-weight:600;
        transition:.25s;
        text-decoration: none;
    }

    .filter-btn.active,
    .filter-btn:hover{
        background:#177A95;
        color:#fff;
        text-decoration: none;
    }

    .news-card{
        border:none;
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 10px 30px rgba(0,0,0,.08);
        transition:.25s;
        height:100%;
    }

    .news-card:hover{
        transform:translateY(-4px);
    }

    .news-card img{
        width:100%;
        height:190px;
        object-fit:cover;
    }

    .badge-news{
        background:#177A95;
        color:#fff;
        font-size:12px;
        padding:6px 12px;
        border-radius:999px;
        display:inline-block;
        margin-bottom:10px;
    }

    .news-title{
        font-size:22px;
        font-weight:700;
        line-height:1.4;
    }

    .news-link{
        color:#177A95;
        text-decoration:none;
        font-weight:700;
    }

    .news-link:hover{
        text-decoration:underline;
    }

    .sidebar-box{
        background:#eef7fa;
        border:1px solid #d7e9ef;
        border-radius:18px;
        padding:18px;
        margin-bottom:25px;
    }

    .sidebar-title{
        font-weight:700;
        color:#177A95;
        margin-bottom:15px;
    }

    .sidebar-item{
        background:#fff;
        border-radius:12px;
        padding:12px;
        margin-bottom:12px;
        transition:.2s;
    }

    .sidebar-item:hover{
        transform:translateX(3px);
    }

    .sidebar-item a{
        text-decoration:none;
        color:#222;
        font-weight:600;
    }

    .sidebar-button{
        display:block;
        width:100%;
        text-align:center;
        background:#177A95;
        color:#fff;
        padding:10px;
        border-radius:10px;
        text-decoration:none;
        font-weight:600;
    }

    .sidebar-button:hover{
        background:#125f74;
        color:#fff;
    }
    .read-more{
        color:#177A95;
        font-weight:600;
        text-decoration:none;
        transition:.3s;
    }

    .read-more:hover{
        color:#125F74;
    }
</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

    <div class="container">

        {{-- Breadcrumb --}}
        <div class="breadcrumb-custom mb-3">
            <a href="/">Beranda</a>
            &nbsp;>&nbsp;
            <span>Informasi</span>
        </div>

        {{-- Judul --}}
        <h1 class="page-title text-center mb-5">
            Informasi Sekolah
        </h1>

        {{-- Filter --}}
        <div class="d-flex flex-wrap gap-3 mb-5">

            <a href="{{ route('informasi.index') }}"
                class="filter-btn {{ !request('kategori') ? 'active' : '' }}">
                    Semua
            </a>

            <a href="{{ route('informasi.index', ['kategori' => 'berita']) }}"
                class="filter-btn {{ request('kategori') == 'berita' ? 'active' : '' }}">
                    Berita
            </a>

            <a href="{{ route('informasi.index', ['kategori' => 'pengumuman']) }}"
                class="filter-btn {{ request('kategori') == 'pengumuman' ? 'active' : '' }}">
                    Pengumuman
            </a>

            <a href="{{ route('informasi.index', ['kategori' => 'agenda']) }}"
                class="filter-btn {{ request('kategori') == 'agenda' ? 'active' : '' }}">
                    Agenda
            </a>

            <a href="{{ route('informasi.index', ['kategori' => 'prestasi']) }}"
                class="filter-btn {{ request('kategori') == 'prestasi' ? 'active' : '' }}">
                    Prestasi
            </a>

        </div>

        <div class="row">

            {{-- Kiri --}}
            <div class="col-lg-9">

                <div class="row">

                    @forelse($beritas as $berita)

                        <div class="col-md-6 col-xl-4 mb-4">

                            <div class="news-card">

                                <img
                                    src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : asset('images/no-image.png') }}"
                                    alt="{{ $berita->judul }}">

                                <div class="p-3">

                                    <div class="badge-news">
                                        {{ ucfirst($berita->kategori) }}
                                    </div>

                                    <div class="text-muted mb-2" style="font-size:13px;">
                                        <i class="bi bi-calendar-event"></i>
                                        {{ $berita->created_at->format('d M Y') }}
                                    </div>

                                    <div class="news-title mb-2">
                                        {{ Str::limit($berita->judul, 55) }}
                                    </div>

                                    <div class="text-secondary mb-3">
                                        {{ Str::limit($berita->ringkasan, 85) }}
                                    </div>

                                    <a href="#"
                                        data-bs-toggle="modal"
                                        data-bs-target="#comingSoonModal"
                                        class="read-more">
                                            Baca Selengkapnya →
                                    </a>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="col-12 text-center">
                            <h5>Belum ada berita.</h5>
                        </div>

                    @endforelse

                </div>

                <div class="mt-4">
                    {{ $beritas->links() }}
                </div>

            </div>

            {{-- Sidebar --}}
            <div class="col-lg-3">

                {{-- Pengumuman --}}
                <div class="sidebar-box">

                    <div class="sidebar-title">
                        📢 Pengumuman Penting
                    </div>

                    @foreach($pengumuman as $item)

                        <div class="sidebar-item">

                            <a href="{{ route('informasi.show', $item) }}">
                                {{ Str::limit($item->judul, 45) }}
                            </a>

                        </div>

                    @endforeach


                </div>

                    {{-- Agenda --}}
                    <div class="sidebar-box">

                        <div class="sidebar-title">
                            📅 Agenda Terdekat
                        </div>

                        @foreach($agenda as $item)

                            <div class="sidebar-item">

                                <a href="{{ route('informasi.show', $item) }}">
                                    {{ Str::limit($item->judul, 45) }}
                                </a>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Modal Pengembangan -->
<div class="modal fade"
     id="comingSoonModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4">

            <div class="modal-header">

                <h5 class="modal-title fw-bold">
                    Informasi
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body fs-5">

                🚧 Halaman detail informasi masih dalam tahap pengembangan.

            </div>

            <div class="modal-footer border-0">

                <button type="button"
                        class="btn btn-secondary px-4"
                        data-bs-dismiss="modal">

                    Tutup

                </button>

            </div>

        </div>

    </div>

</div>

@endsection