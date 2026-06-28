@extends('layouts.public')

@section('content')

<style>

.page-title{
    font-size:42px;
    font-weight:800;
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

.ekskul-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
}

.ekskul-card:hover{
    transform:translateY(-8px);
}

.ekskul-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.ekskul-body{
    padding:25px;
}

.ekskul-title{
    font-size:28px;
    font-weight:700;
    margin-bottom:10px;
}

.ekskul-info{
    color:#666;
    margin-bottom:15px;
}

.ekskul-jadwal{
    font-size:15px;
    color:#177A95;
    font-weight:600;
}

.btn-detail{
    background:#177A95;
    color:white;
    padding:10px 25px;
    border-radius:30px;
    text-decoration:none;
    display:inline-block;
    margin-top:15px;
    transition:.3s;
}

.btn-detail:hover{
    background:#0f6279;
    color:white;
}

.hero-ekskul{
    background:linear-gradient(
        rgba(23,122,149,.75),
        rgba(23,122,149,.75)
    ),
    url('https://images.unsplash.com/photo-1529156069898-49953e39b3ac');
    
    background-size:cover;
    background-position:center;
    padding:80px 20px;
    border-radius:25px;
    text-align:center;
    color:white;
    margin-bottom:60px;
}

.hero-ekskul h1{
    font-size:48px;
    font-weight:800;
}

.hero-ekskul p{
    font-size:10px;
}
.btn-detail{
    background:white;
    color:#177A95;
    border:2px solid #177A95;
    padding:3px 14px;
    border-radius:30px;
    font-weight:400;
    margin-top:15px;
    transition:.3s;
}

.btn-detail:hover{
    background:#177A95;
    color:white;
}

</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

<div class="container">

    {{-- Breadcrumb --}}
    <div class="breadcrumb-custom mb-3">
        <a href="/">Beranda</a>
        &nbsp;>&nbsp;
        <span>Ekstrakurikuler</span>
    </div>

    {{-- Hero --}}
    <div class="hero-ekskul">

        <h1>Ekstrakurikuler</h1>

        <p>
            Wadah pengembangan bakat, minat, karakter,
            dan prestasi peserta didik SMA Negeri 1 Keluang.
        </p>

    </div>

    {{-- Card Ekskul --}}
    <div class="row">

        {{-- Pramuka --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/pramuka.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        Pramuka
                    </div>

                    <div class="ekskul-info">
                        Membentuk karakter, kedisiplinan,
                        kepemimpinan dan kemandirian siswa.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap hari Jumat 14.00 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

        {{-- PMR --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/pmr.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        PMR
                    </div>

                    <div class="ekskul-info">
                        Melatih keterampilan pertolongan pertama
                        dan jiwa kemanusiaan.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap hari Sabtu 08.00 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

        {{-- Basket --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/baskettt.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        Basket
                    </div>

                    <div class="ekskul-info">
                        Mengembangkan kemampuan bermain basket
                        dan kerja sama tim.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap hari Selasa 15.00 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

        {{-- Voli --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/voli.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        Voli
                    </div>

                    <div class="ekskul-info">
                        Mengembangkan kemampuan bola voli
                        dan sportivitas siswa.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap hari Kamis 15.00 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

        {{-- Futsal --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/futsal.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        Futsal
                    </div>

                    <div class="ekskul-info">
                        Menyalurkan bakat olahraga dan
                        meningkatkan kekompakan tim.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap hari Rabu 15.00 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

        {{-- Paskibra --}}
        <div class="col-lg-4 mb-4">

            <div class="ekskul-card">

                <img src="{{ asset('images/paskib.jpg') }}">

                <div class="ekskul-body">

                    <div class="ekskul-title">
                        Paskibra
                    </div>

                    <div class="ekskul-info">
                        Membentuk disiplin, tanggung jawab,
                        dan jiwa nasionalisme.
                    </div>

                    <div class="ekskul-jadwal">
                        📅 Setiap Sabtu 07.30 WIB
                    </div>
                    <button
                        class="btn-detail"
                        data-bs-toggle="modal"
                        data-bs-target="#devModal">

                        Detail

                    </button>
                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- Modal Pengembangan -->
<div class="modal fade" id="devModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Informasi
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                🚧 Halaman detail ekstrakurikuler masih dalam tahap pengembangan.

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Tutup

                </button>

            </div>

        </div>

    </div>

</div>

@endsection