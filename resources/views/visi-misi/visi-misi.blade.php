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

    .visi-card{
        background:#fff;
        border-radius:20px;
        padding:50px;
        box-shadow:0 5px 20px rgba(0,0,0,.08);
    }

    .misi-card{
        background:#fff;
        border:none;
        border-radius:18px;
        padding:25px;
        box-shadow:0 5px 15px rgba(0,0,0,.08);
        transition:.3s;
        height:100%;
    }

    .misi-card:hover{
        transform:translateY(-5px);
    }

    .icon-box{
        width:60px;
        height:60px;
        background:#177A95;
        color:white;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:28px;
        margin-bottom:15px;
    }

    .tujuan-card{
        background:#fff;
        border-radius:20px;
        padding:40px;
        box-shadow:0 5px 20px rgba(0,0,0,.08);
    }

    .tujuan-card ul{
        padding-left:20px;
    }

    .tujuan-card li{
        margin-bottom:12px;
        font-size:18px;
    }
</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

    <div class="container">

        {{-- Breadcrumb --}}
        <div class="breadcrumb-custom mb-3">
            <a href="/">Beranda</a>
            &nbsp;>&nbsp;
            <span>Visi Misi</span>
        </div>

        {{-- Judul --}}
        <div class="text-center mb-5">
            <h1 class="page-title">
                Visi dan Misi
            </h1>
        </div>

        {{-- VISI --}}
        <div class="visi-card mb-5">

            <h2 class="fw-bold text-center mb-4">
                VISI
            </h2>

            <p class="text-center fs-4 mb-0">
                "Menjadi sekolah unggul yang menghasilkan peserta didik
                beriman, berakhlak mulia, berprestasi, berkarakter,
                dan berwawasan global."
            </p>

        </div>

        {{-- MISI --}}
        <div class="text-center mb-4">
            <h2 class="fw-bold">
                MISI
            </h2>
        </div>

        <div class="row">

            <div class="col-md-6 mb-4">

                <div class="misi-card">

                    <div class="icon-box">
                        🎓
                    </div>

                    <h4 class="fw-bold">
                        Pendidikan Berkualitas
                    </h4>

                    <p class="mb-0">
                        Menyelenggarakan pembelajaran yang aktif,
                        kreatif, inovatif, dan menyenangkan.
                    </p>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <div class="misi-card">

                    <div class="icon-box">
                        📚
                    </div>

                    <h4 class="fw-bold">
                        Budaya Literasi
                    </h4>

                    <p class="mb-0">
                        Menumbuhkan budaya membaca, menulis,
                        dan berpikir kritis bagi peserta didik.
                    </p>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <div class="misi-card">

                    <div class="icon-box">
                        🤝
                    </div>

                    <h4 class="fw-bold">
                        Penguatan Karakter
                    </h4>

                    <p class="mb-0">
                        Membentuk peserta didik yang disiplin,
                        bertanggung jawab, dan berakhlak mulia.
                    </p>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <div class="misi-card">

                    <div class="icon-box">
                        💻
                    </div>

                    <h4 class="fw-bold">
                        Teknologi dan Inovasi
                    </h4>

                    <p class="mb-0">
                        Mengembangkan kemampuan teknologi
                        informasi dan komunikasi peserta didik.
                    </p>

                </div>

            </div>

        </div>

        {{-- TUJUAN --}}
        <div class="tujuan-card mt-5">

            <h2 class="fw-bold text-center mb-4">
                TUJUAN SEKOLAH
            </h2>

            <ul>
                <li>
                    Meningkatkan prestasi akademik dan non-akademik peserta didik.
                </li>

                <li>
                    Membentuk karakter peserta didik yang disiplin,
                    religius, dan bertanggung jawab.
                </li>

                <li>
                    Mengembangkan keterampilan teknologi informasi
                    dan komunikasi.
                </li>

                <li>
                    Menyiapkan lulusan yang mampu bersaing
                    di tingkat nasional maupun internasional.
                </li>

                <li>
                    Mewujudkan lingkungan sekolah yang aman,
                    nyaman, dan berbudaya.
                </li>
            </ul>

        </div>

    </div>

</section>

@endsection