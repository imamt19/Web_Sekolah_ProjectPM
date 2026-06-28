@extends('layouts.public')

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

    .timeline-card{
        border:none;
        border-radius:20px;
        transition:.3s;
    }

    .timeline-card:hover{
        transform:translateY(-5px);
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

            <span>Sejarah Sekolah</span>
        </div>

        {{-- Judul --}}
        <h1 class="page-title text-center">
            Sejarah SMA Negeri 1 Keluang
        </h1>

        {{-- Banner --}}
        <div class="mb-5">
            <img
                src="{{ asset('images/angkatan_pertama.jpeg') }}"
                class="img-fluid rounded-4 shadow"
                style="width:100%;height:450px;object-fit:cover;">
                
        </div>

        {{-- Konten Sejarah --}}
        <div class="row justify-content-center mb-5">

            <div class="col-lg-10">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-5">

                        <h3 class="fw-bold mb-4">
                            Awal Berdirinya Sekolah
                        </h3>

                        <p>
                            SMA Negeri 1 Keluang didirikan sebagai salah satu
                            bentuk komitmen pemerintah dalam menyediakan akses
                            pendidikan menengah atas yang berkualitas bagi
                            masyarakat Kecamatan Keluang dan sekitarnya.
                        </p>

                        <p>
                            Sejak awal berdiri, sekolah ini terus berkembang
                            baik dari segi jumlah peserta didik, tenaga pendidik,
                            maupun sarana dan prasarana pendukung pembelajaran.
                        </p>

                        <p>
                            Dengan semangat mencetak generasi yang unggul,
                            disiplin, dan berprestasi, SMA Negeri 1 Keluang
                            senantiasa melakukan inovasi dalam proses belajar
                            mengajar serta pengembangan karakter siswa.
                        </p>

                        <p>
                            Hingga saat ini, SMA Negeri 1 Keluang telah
                            melahirkan banyak lulusan yang berhasil melanjutkan
                            pendidikan ke perguruan tinggi maupun berkiprah
                            di berbagai bidang profesi.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        {{-- Timeline --}}
        <div class="mb-5">

            <h2 class="fw-bold text-center mb-5">
                Perjalanan Sekolah
            </h2>

            <div class="row">

                <div class="col-md-3 mb-4">

                    <div class="card timeline-card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h2 class="fw-bold text-primary">
                                2005
                            </h2>

                            <p class="mb-0">
                                Awal berdirinya SMA Negeri 1 Keluang.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card timeline-card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h2 class="fw-bold text-primary">
                                2012
                            </h2>

                            <p class="mb-0">
                                Pembangunan laboratorium komputer.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card timeline-card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h2 class="fw-bold text-primary">
                                2018
                            </h2>

                            <p class="mb-0">
                                Meraih akreditasi A tingkat nasional.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card timeline-card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h2 class="fw-bold text-primary">
                                2025
                            </h2>

                            <p class="mb-0">
                                Transformasi menuju sekolah digital.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Visi Perjalanan --}}
        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-5 text-center">

                <h2 class="fw-bold mb-4">
                    Terus Berkembang untuk Masa Depan
                </h2>

                <p class="mb-0">
                    SMA Negeri 1 Keluang berkomitmen untuk terus meningkatkan
                    kualitas pendidikan, memperkuat karakter peserta didik,
                    dan menciptakan lingkungan belajar yang inovatif guna
                    menghasilkan generasi yang unggul, disiplin, dan berprestasi.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection