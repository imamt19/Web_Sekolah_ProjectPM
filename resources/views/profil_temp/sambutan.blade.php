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

.kepsek-img{
    width:100%;
    border-radius:25px;
    object-fit:cover;
    height:500px;
}

.quote-box{
    border-left:5px solid #177A95;
    background:#f8fbfc;
    padding:25px;
    border-radius:15px;
}

.visi-card{
    border:none;
    border-radius:20px;
    transition:.3s;
}

.visi-card:hover{
    transform:translateY(-6px);
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

        <span>Sambutan Kepala Sekolah</span>
    </div>

    {{-- Judul --}}
    <h1 class="page-title text-center">
        Sambutan Kepala Sekolah
    </h1>

    <div class="row align-items-center mb-5">

        <div class="col-lg-4 mb-4">

            <img
                src="https://images.unsplash.com/photo-1560250097-0b93528c311a"
                class="kepsek-img">

            <div class="text-center mt-4">

                <h4 class="fw-bold mb-1">
                    M. Imam Tajuddin, S.Kom., M.Sc.
                </h4>

                <p class="text-muted">
                    Kepala SMA Negeri 1 Keluang
                </p>

            </div>

        </div>

        <div class="col-lg-8">

            <div class="quote-box">

                <h2 class="fw-bold mb-4">
                    Selamat Datang
                </h2>

                <p>
                    Assalamu'alaikum Warahmatullahi Wabarakatuh.
                </p>

                <p>
                    Puji syukur kehadirat Allah SWT atas segala rahmat dan
                    karunia-Nya sehingga website SMA Negeri 1 Keluang dapat
                    hadir sebagai media informasi dan komunikasi bagi seluruh
                    warga sekolah maupun masyarakat luas.
                </p>

                <p>
                    Kami berkomitmen untuk memberikan layanan pendidikan yang
                    berkualitas, membangun karakter peserta didik, serta
                    menciptakan lingkungan belajar yang inovatif dan inspiratif.
                </p>

                <p>
                    Semoga website ini dapat menjadi sarana yang bermanfaat
                    dalam menyampaikan informasi sekolah secara cepat, tepat,
                    dan transparan.
                </p>

                <p class="mb-0">
                    Wassalamu'alaikum Warahmatullahi Wabarakatuh.
                </p>

            </div>

        </div>

    </div>

    {{-- Visi Kepemimpinan --}}
    <div class="mb-5">

        <h2 class="fw-bold text-center mb-5">
            Komitmen Kepemimpinan
        </h2>

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="card visi-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <h1>🎓</h1>

                        <h5 class="fw-bold">
                            Pendidikan Berkualitas
                        </h5>

                        <p>
                            Meningkatkan mutu pembelajaran yang adaptif
                            terhadap perkembangan zaman.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card visi-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <h1>⭐</h1>

                        <h5 class="fw-bold">
                            Karakter Unggul
                        </h5>

                        <p>
                            Membentuk peserta didik yang disiplin,
                            berakhlak mulia, dan bertanggung jawab.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card visi-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <h1>🚀</h1>

                        <h5 class="fw-bold">
                            Prestasi Berkelanjutan
                        </h5>

                        <p>
                            Mendorong siswa untuk terus berkembang
                            dan meraih prestasi terbaik.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

@endsection