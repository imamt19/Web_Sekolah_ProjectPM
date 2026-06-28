@extends('layouts.public')

@section('title', 'Beranda')

@section('content')

<style>

    .hero-subtitle{
        color:#177a95;
        font-size:28px;
        font-weight:700;
    }

    .hero-title{
        color:#177a95;
        font-size:60px;
        font-weight:800;
        line-height:1.1;
        margin:20px 0;
    }

    .hero-description{
        font-size:19px;
        color:#666;
        max-width:560px;
        line-height:1.8;
    }

    .hero-btn{
        display:inline-block;
        padding:15px 28px;
        margin-right:15px;
        margin-top:10px;
        background:#177a95;
        color:#fff;
        text-decoration:none;
        border-radius:12px;
        font-weight:600;
        transition:.3s;
    }

    .hero-btn:hover{
        background:#125f74;
        color:white;
    }

    .hero-image{
        width:100%;
        max-width:500px;
        max-height:600px;
        object-fit:cover;
        border-radius:24px;
        box-shadow:0 15px 35px rgba(0,0,0,.15);
    }

    .hero-image-wrapper{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-image-custom{
        width: 120%;
        max-width: 760px;
        height: 520px;
        object-fit: cover;

        border-radius: 32px;

        box-shadow:
            0 30px 60px rgba(0,0,0,.18);

        transition: all .35s ease;

        transform: translateX(50px);
    }

    .hero-image-wrapper::before{
        content: "";
        position: absolute;

        width: 380px;
        height: 380px;

        background: rgba(23,122,149,.08);

        border-radius: 50%;

        top: -40px;
        right: -30px;

        z-index: -1;
    }

    .hero-image-custom:hover{
        transform: translateX(50px) scale(1.02);
    }
    
</style>

<style>
.hero-section{
    padding:60px 0;
}

.hero-banner{
    position: relative;
    width: 100%;
    height:100vh;
    min-height:600px;

    border-radius: 0;      /* hilangkan sudut membulat */
    overflow: hidden;

    box-shadow: none;      /* hilangkan bayangan */
}

.hero-banner img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:rgba(0, 0, 0, 0.50);
}

.hero-content{
    position:absolute;
    top:50%;
    left:12%;
    transform:translateY(-50%);

    max-width:650px;
    width:45%;

    z-index:2;
}

.hero-subtitle{
    color:#fff;
    font-size:24px;
    font-weight:700;
    margin-bottom:10px;
}

.hero-title{
    color:#fff;
    font-size:82px;
    font-weight:800;
    line-height:1.05;
    margin:18px 0;
}

.hero-description{
    color:#ffffff;
    font-size:22px;
    line-height:1.7;
    margin-bottom:35px;
    max-width:600px;
}

@media(max-width:768px){

    .hero-banner{
        height:85vh;
        min-height:550px;
    }

    .hero-content{
        left:25px;
        right:25px;
        width:auto;
        max-width:100%;
    }

    .hero-subtitle{
        font-size:18px;
    }

    .hero-title{
        font-size:clamp(42px, 6vw, 82px);
        line-height:1.1;
    }

    .hero-description{
        font-size:17px;
        line-height:1.6;
        max-width:100%;
    }

    .hero-content .btn{
        display:inline-block;
        width:auto;
        margin-bottom:12px;
    }

}
    @media(max-width:768px){

        .feature-card{
            padding:25px 20px !important;
        }

        .feature-title{
            font-size:18px;
        }

        .section-title,
        h2.fw-bold{
            font-size:30px !important;
        }
    @media(max-width:768px){

        .card-img-top{
            height:200px !important;
        }

    }
    }
</style>

<section class="hero-section">

    <div class="hero-banner">

            <img
                src="{{ asset('images/hero.jpg') }}"
                alt="Hero SMA Negeri 1 Keluang">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <div class="hero-subtitle">
                    Selamat Datang di Website
                </div>

                <div class="hero-title">
                    SMA Negeri 1 Keluang
                </div>

                <div class="hero-description">
                    Sekolah yang berkomitmen mencetak generasi unggul,
                    berkarakter, disiplin, dan siap menghadapi tantangan
                    masa depan melalui pendidikan berkualitas.
                </div>

                <a href="{{ route('profil.sekolah') }}"
                    class="btn-outline-main"
                    style="margin-right:25px;">
                        Kenali Sekolah Kami
                </a>

                <a href="{{ route('spmb') }}" class="btn-outline-main">
                    Informasi SPMB
                </a>

            </div>

        </div>

</section>




<style>
    .why-section{
        background:#eaf7fb;
        padding:120px 0;
    }

    .section-title{
        font-size:42px;
        font-weight:800;
        text-align:center;
        margin-bottom:50px;
    }

    .section-title span{
        color:#177a95;
    }

    .feature-card{
        background:#fff;
        border-radius:18px;
        padding:35px 25px;
        box-shadow:0 10px 25px rgba(0,0,0,.08);
        text-align:center;
        transition:.3s;
        height:100%;
    }

    .feature-card:hover{
        transform:translateY(-8px);
    }

    .feature-icon{
        font-size:48px;
        color:#177a95;
        margin-bottom:20px;
    }

    .feature-title{
        font-size:22px;
        font-weight:700;
        margin-bottom:10px;
    }

    .feature-desc{
        color:#666;
    }
</style>

<section style="background:#EAF7FB;padding:90px 0;">

    <div class="container">

        <h2 class="fw-bold text-center mb-5">
            Kenapa Harus
            <span style="color:#177A95;">
                SMA Negeri 1 Keluang?
            </span>
        </h2>

        <div class="row g-4">

            <div class="col-lg-3">
                <div class="p-5 bg-white rounded-4 shadow-sm text-center h-100 feature-card">
                    <i class="bi bi-pc-display fs-1 text-info"></i>
                    <h5 class="mt-3 fw-bold">Fasilitas Modern</h5>
                    <p class="text-secondary">
                        Laboratorium dan sarana belajar lengkap.
                    </p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="p-5 bg-white rounded-4 shadow-sm text-center h-100 feature-card">
                    <i class="bi bi-building fs-1 text-info"></i>
                    <h5 class="mt-3 fw-bold">Lingkungan Nyaman</h5>
                    <p class="text-secondary">
                        Bersih, asri, dan mendukung pembelajaran.
                    </p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="p-5 bg-white rounded-4 shadow-sm text-center h-100 feature-card">
                    <i class="bi bi-people fs-1 text-info"></i>
                    <h5 class="mt-3 fw-bold">Guru Berpengalaman</h5>
                    <p class="text-secondary">
                        Didukung tenaga pendidik profesional.
                    </p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="p-5 bg-white rounded-4 shadow-sm text-center h-100 feature-card">
                    <i class="bi bi-award fs-1 text-info"></i>
                    <h5 class="mt-3 fw-bold">Prestasi Unggul</h5>
                    <p class="text-secondary">
                        Banyak prestasi akademik maupun non-akademik.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<style>
    .news-section{
        padding:90px 0;
    }

    .news-header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:40px;
    }

    .news-title{
        font-size:42px;
        font-weight:800;
        color:#177a95;
    }

    .news-button{
        background:#177a95;
        color:#fff;
        padding:12px 24px;
        border-radius:12px;
        text-decoration:none;
    }

    .news-card{
        background:#fff;
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 10px 25px rgba(0,0,0,.08);
        transition:.3s;
        height:100%;
        
    }

    .news-card:hover{
        transform:translateY(-8px);
    }

    .news-image{
        width:100%;
        height:240px;
        object-fit:cover;
    }

    .news-body{
        padding:20px;
    }

    .news-heading{
        font-size:22px;
        font-weight:700;
    }

    .news-date{
        color:#777;
        margin-bottom:10px;
    }

    .news-link{
        color:#177a95;
        text-decoration:none;
        font-weight:600;
    }
</style>

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold" style="color:#050505;">
                Berita Sekolah
            </h2>

            <a href="{{ route('informasi.index') }}" class="btn-main">
                Lihat Semua
            </a>

        </div>

        <div class="row mt-5">

            @forelse($beritas as $berita)

                <div class="col-lg-4 mb-4">

                    <div class="card border-0 shadow rounded-4 h-100">

                        <img
                            src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : asset('images/no-image.png') }}"
                            class="card-img-top"
                            style="height:180px;object-fit:cover;">

                        <div class="card-body p-3">

                            <small class="text-muted">
                                {{ $berita->created_at->format('d M Y') }}
                            </small>

                            <h5 class="fw-bold mt-2" style="font-size:20px;">
                                {{ $berita->judul }}
                            </h5>

                            <p class="text-secondary" style="font-size:14px;">
                                {{ $berita->ringkasan }}
                            </p>

                            <a href="{{ route('informasi.show', $berita) }}"
                                class="text-decoration-none fw-bold"
                                style="color:#177A95;">
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

    </div>

</section>