@extends('layouts.public')

@section('content')

<style>

.contact-card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    height:100%;
}

.contact-title{
    color:#222;
    font-weight:700;
    margin-bottom:25px;
}

.social-icon{
    width:45px;
    height:45px;
    border-radius:10px;
    background:#177A95;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    font-size:20px;
}

.page-title{
    font-size:48px;
    font-weight:800;
}
.breadcrumb-custom{
    font-size:15px;
    color:#888;
}

.breadcrumb-custom a{
    text-decoration:none;
    color:#666 !important;
}

.breadcrumb-custom span{
    color:#177A95 !important;
    font-weight:600;
}

.btn-maps{
    border:2px solid #177A95;
    color:#177A95;
    background:white;
    border-radius:50px;
    padding:12px 30px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn-maps:hover{
    background:#177A95;
    color:white;
}
</style>

<section class="pb-5 mb-5" style="padding-top:20px;">

    <div class="container">

        <div class="breadcrumb-custom mb-3">

            <a href="/">Beranda</a>

            &nbsp;>&nbsp;

            <span>Contact</span>

        </div>

        <h1 class="page-title text-center mb-5">
            Hubungi Kami
        </h1>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="contact-card">

                    <h3 class="contact-title">
                        Informasi Kontak
                    </h3>

                    <p>
                        Jl. Pendidikan, Keluang,
                        Musi Banyuasin,
                        Sumatera Selatan
                    </p>

                    <p>
                        📞 0888-8888-8888
                    </p>

                    <p>
                        ✉️ info@sman1keluang.sch.id
                    </p>

                    <h5 class="mt-4 fw-bold">
                        Jam Operasional
                    </h5>

                    <p>
                        Senin - Jumat<br>
                        07.00 - 15.00 WIB
                    </p>

                    <h3 class="contact-title mt-5">
                        Ikuti Kami
                    </h3>

                    <div class="d-flex gap-3">

                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="bi bi-youtube"></i>
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-lg-8">

                <div class="contact-card">

                    <h3 class="contact-title">
                        Lokasi Sekolah
                    </h3>

                    <iframe
                        src="https://maps.google.com/maps?q=SMAN%201%20Keluang&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="500"
                        style="border:0; border-radius:20px;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                    <div class="mt-4">

                        <a href="https://maps.google.com"
                            target="_blank"
                            class="btn btn-maps">

                                Buka di Google Maps

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection