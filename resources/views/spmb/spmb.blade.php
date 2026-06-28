@extends('layouts.public')

@section('content')

<style>
    .page-title{
        font-size:52px;
        font-weight:800;
        color:#222;
        margin-bottom:15px;
    }

    .page-subtitle{
        color:#666;
        font-size:18px;
        max-width:700px;
        margin:auto;
    }

    .spmb-card{
        background:#fff;
        border-top:5px solid #177A95;
        border-radius:20px;
        padding:35px;
        box-shadow:0 10px 30px rgba(0,0,0,.08);
        height:100%;
        transition:.3s;
    }

    .spmb-card:hover{
        transform:translateY(-5px);
    }

    .spmb-icon{
        font-size:50px;
        margin-bottom:20px;
    }

    .spmb-title{
        font-size:24px;
        font-weight:700;
        margin-bottom:15px;
        color:#177A95;
    }

    .spmb-section-title{
        font-size:40px;
        font-weight:800;
        color:#222;
        margin-bottom:20px;
    }

    .btn-spmb{
        background:#177A95;
        color:#fff;
        border:none;
        padding:14px 30px;
        border-radius:50px;
        font-weight:600;
        text-decoration:none;
        transition:.3s;
    }

    .btn-spmb:hover{
        background:#125F74;
        color:#fff;
    }

    .timeline-item{
        background:#fff;
        border-left:5px solid #177A95;
        padding:20px;
        border-radius:10px;
        margin-bottom:20px;
        box-shadow:0 5px 20px rgba(0,0,0,.05);
    }

    .timeline-date{
        color:#177A95;
        font-weight:700;
        margin-bottom:5px;
    }

    @media(max-width:768px){

        .page-title{
            font-size:38px;
        }

        .spmb-section-title{
            font-size:30px;
        }

    }
</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

    <div class="container">

        {{-- Breadcrumb --}}
        <div class="breadcrumb-custom mb-3">
            <a href="/">Beranda</a>
            &nbsp;>&nbsp;
            <span>SPMB</span>
        </div>

        {{-- Hero --}}
        <div class="text-center py-5 mb-5 rounded-4"
            style="
            background:linear-gradient(135deg,#177A95,#1f92b2);
            color:white;">
            
            <h1 class="display-3 fw-bold">
                SPMB 2026
            </h1>

            <p class="fs-5 mb-0">
                Sistem Penerimaan Murid Baru SMA Negeri 1 Keluang
            </p>

        </div>

        {{-- Informasi Utama --}}
        <div class="row g-4 mb-5">

            <div class="col-md-4">

                <div class="spmb-card text-center">

                    <div class="spmb-icon">
                        📝
                    </div>

                    <h3 class="spmb-title">
                        Persyaratan
                    </h3>

                    <p>
                        Lengkapi dokumen yang dibutuhkan untuk mengikuti
                        proses pendaftaran siswa baru.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="spmb-card text-center">

                    <div class="spmb-icon">
                        📅
                    </div>

                    <h3 class="spmb-title">
                        Jadwal
                    </h3>

                    <p>
                        Lihat seluruh tahapan mulai dari pendaftaran,
                        seleksi, hingga pengumuman hasil.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="spmb-card text-center">

                    <div class="spmb-icon">
                        🏫
                    </div>

                    <h3 class="spmb-title">
                        Jalur Pendaftaran
                    </h3>

                    <p>
                        Tersedia beberapa jalur penerimaan sesuai
                        ketentuan yang berlaku.
                    </p>

                </div>

            </div>

        </div>

        {{-- Persyaratan --}}
        <div class="mb-5">

            <h2 class="spmb-section-title text-center">
                Persyaratan Pendaftaran
            </h2>

            <div class="spmb-card">

                <ul class="mb-0">
                    <li>Fotokopi Kartu Keluarga (KK)</li>
                    <li>Fotokopi Akta Kelahiran</li>
                    <li>Pas Foto 3x4</li>
                    <li>Fotokopi Rapor SMP/MTs</li>
                    <li>Ijazah atau Surat Keterangan Lulus</li>
                </ul>

            </div>

        </div>

        {{-- Jadwal --}}
        <div class="mb-5">

            <h2 class="spmb-section-title text-center">
                Jadwal SPMB
            </h2>

            <div class="timeline-item">
                <div class="timeline-date">
                    01 Juni – 15 Juni 2026
                </div>
                Pendaftaran Online
            </div>

            <div class="timeline-item">
                <div class="timeline-date">
                    16 Juni – 20 Juni 2026
                </div>
                Verifikasi Berkas
            </div>

            <div class="timeline-item">
                <div class="timeline-date">
                    25 Juni 2026
                </div>
                Pengumuman Hasil Seleksi
            </div>

            <div class="timeline-item">
                <div class="timeline-date">
                    26 Juni – 30 Juni 2026
                </div>
                Daftar Ulang
            </div>

        </div>

        {{-- Jalur --}}
        <div class="mb-5">

            <h2 class="spmb-section-title text-center">
                Jalur Pendaftaran
            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="spmb-card">
                        <h4>🏠 Zonasi</h4>
                        <p>
                            Jalur berdasarkan domisili calon peserta didik.
                        </p>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="spmb-card">
                        <h4>🏆 Prestasi</h4>
                        <p>
                            Jalur berdasarkan prestasi akademik maupun non akademik.
                        </p>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="spmb-card">
                        <h4>👨‍👩‍👧 Perpindahan Tugas Orang Tua</h4>
                        <p>
                            Jalur khusus bagi siswa yang mengikuti perpindahan tugas orang tua.
                        </p>
                    </div>

                </div>

            </div>

        </div>

        {{-- CTA --}}
        <div class="text-center">

            <h2 class="spmb-section-title">
                Siap Mendaftar?
            </h2>

            <p class="mb-4">
                Hubungi panitia SPMB SMA Negeri 1 Keluang untuk informasi lebih lanjut.
            </p>

            <a href="{{ route('contact') }}" class="btn-spmb">
                Hubungi Panitia
            </a>

        </div>

    </div>

</section>

@endsection