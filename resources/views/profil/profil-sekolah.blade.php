@extends('layouts.public')

@section('content')

<style>
    .facility-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
    }

    .facility-card:hover{
        transform:translateY(-8px);
    }

    .facility-card img{
        height:220px;
        object-fit:cover;
    }
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
</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

    <div class="container">

        {{-- Breadcrumb --}}
        <div class="breadcrumb-custom mb-3">
            <a href="/">Beranda</a>
            &nbsp;>&nbsp;
            <a href="#">Profil</a>
            &nbsp;>&nbsp;
            <span>Profil Sekolah</span>
        </div>

        {{-- Judul --}}
        <h1 class="page-title text-center mb-5">
            Profil SMA Negeri 1 Keluang
        </h1>

        {{-- Banner --}}
        <div class="mb-5">
            <img
                src="https://images.unsplash.com/photo-1509062522246-3755977927d7"
                class="img-fluid rounded-4 shadow"
                style="width:100%; height:450px; object-fit:cover;"
                alt="Profil Sekolah">
        </div>

        {{-- Tentang Sekolah --}}
        <div class="row align-items-center mb-5">

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Tentang Sekolah
                </h2>

                <p>
                    SMA Negeri 1 Keluang merupakan salah satu sekolah menengah
                    atas unggulan di Kabupaten Musi Banyuasin yang berkomitmen
                    menghasilkan peserta didik yang berprestasi, berkarakter,
                    dan siap menghadapi tantangan masa depan.
                </p>

                <p>
                    Dengan dukungan tenaga pendidik profesional, fasilitas yang
                    memadai, serta lingkungan belajar yang kondusif, sekolah
                    terus berupaya memberikan layanan pendidikan terbaik bagi
                    seluruh peserta didik.
                </p>

            </div>

            <div class="col-lg-6">

                <img
                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                    class="img-fluid rounded-4 shadow"
                    alt="Kegiatan Sekolah">

            </div>

        </div>

        {{-- Statistik --}}
        <div class="row text-center mb-5">

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm p-4">
                    <h2 class="fw-bold text-primary">850+</h2>
                    <p class="mb-0">Siswa</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm p-4">
                    <h2 class="fw-bold text-primary">45</h2>
                    <p class="mb-0">Guru</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm p-4">
                    <h2 class="fw-bold text-primary">20+</h2>
                    <p class="mb-0">Prestasi</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm p-4">
                    <h2 class="fw-bold text-primary">15</h2>
                    <p class="mb-0">Ekstrakurikuler</p>
                </div>
            </div>

        </div>

        {{-- Fasilitas --}}
        <div class="mb-5">

            <h2 class="fw-bold text-center mb-4">
                Fasilitas Sekolah
            </h2>

            <div class="row">

                <div class="col-md-4 mb-3">

                    <div class="card facility-card shadow-sm">

                        <img
                            src="{{ asset('images/perpus.jpg') }}"
                            class="card-img-top"
                            alt="Perpustakaan">

                        <div class="card-body">

                            <h5 class="fw-bold">
                                📚 Perpustakaan
                            </h5>

                            <p>
                                Perpustakaan dengan koleksi buku pelajaran,
                                referensi, dan literasi yang lengkap.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 mb-3">

                    <div class="card facility-card shadow-sm">

                        <img
                            src="{{ asset('images/labkom.jpg') }}"
                            class="card-img-top">

                        <div class="card-body">

                            <h5 class="fw-bold">
                                💻 Laboratorium Komputer
                            </h5>

                            <p class="mb-0">
                                Laboratorium modern yang mendukung pembelajaran
                                teknologi informasi dan komunikasi.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 mb-3">

                    <div class="card facility-card shadow-sm">

                        <img
                            src="{{ asset('images/basket.jpg') }}"
                            class="card-img-top">

                        <div class="card-body">

                            <h5 class="fw-bold">
                                🏀 Lapangan Olahraga
                            </h5>

                            <p class="mb-0">
                                Sarana olahraga untuk mendukung kesehatan,
                                bakat, dan prestasi siswa.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection