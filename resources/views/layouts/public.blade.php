<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SMA Negeri 1 Keluang')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root{
            --primary:#177A95;
            --primary-dark:#125F74;
            --bg:#F7FAFC;
        }

        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            margin:0;
            padding-top:95px;
            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{
            background:#fff;
            padding:18px 0;
            box-shadow:0 2px 18px rgba(0,0,0,.05);
        }

        .logo{
            width:58px;
            height:58px;
            object-fit:contain;
        }

        .school-name{
            font-size:30px;
            font-weight:800;
            color:var(--primary);
            line-height:1;
        }

        .school-sub{
            font-size:14px;
            color:#777;
        }

        .nav-link-custom{
            border:2px solid var(--primary);
            border-radius:15px;
            padding:10px 22px !important;
            margin-left:10px;
            color:#222 !important;
            font-weight:600;
            transition:.3s;
        }

        .nav-link-custom:hover,
        .nav-link-custom.active{
            background:var(--primary);
            color:#fff !important;
        }

        /* BUTTON */

        .btn-main{
            background:#fff;
            color:#177A95;
            padding:14px 28px;
            border-radius:14px;
            font-weight:700;
            text-decoration:none;
            display:inline-block;
            transition:.3s;
            box-shadow:0 8px 20px rgba(0,0,0,.15);
        }

        .btn-main:hover{
            background:#177A95;
            color:#fff;
            transform:translateY(-2px);
        }
        .btn-outline-main{
            border:2px solid #fff;
            color:#fff;
            background:rgba(255,255,255,0.08);
            backdrop-filter:blur(5px);
            padding:14px 28px;
            border-radius:14px;
            font-weight:600;
            text-decoration:none;
            transition:.3s;
        }

        .btn-outline-main:hover{
            background:#fff;
            color:#177A95;
        }

        /* FOOTER */

        footer{
            background:var(--primary);
            color:white;
            margin-top:80px;
        }

        .footer-top{
            padding:70px 0;
        }

        .footer-title{
            font-size:28px;
            font-weight:700;
            margin-bottom:20px;
        }

        .footer-text{
            opacity:.9;
            line-height:1.9;
        }

        .footer-icon{
            width:45px;
            height:45px;
            background:rgba(255,255,255,.15);
            border-radius:50%;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            margin-right:8px;
            font-size:20px;
        }

        .footer-bottom{
            border-top:1px solid rgba(255,255,255,.2);
            padding:18px 0;
            text-align:center;
            font-size:14px;
        }
        .active-submenu{
            color:#177A95 !important;
            font-weight:700;
            background:#eef8fb !important;
        }
        /* RESPONSIVE MOBILE */

        @media (max-width:768px){

            .school-name{
                font-size:18px;
            }

            .school-sub{
                font-size:12px;
            }

            .logo{
                width:42px;
                height:42px;
            }

            .navbar{
                padding:12px 0;
            }

            .nav-link-custom{
                margin-left:0;
                margin-top:10px;
                text-align:center;
            }

            .footer-title{
                font-size:22px;
            }

            .footer-top{
                padding:40px 0;
                text-align:center;
            }

            .footer-icon{
                margin-bottom:10px;
            }

        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">

            <img src="{{ asset('images/logo.png') }}"
                 class="logo me-3"
                 onerror="this.style.display='none'">

            <div>

                <div class="school-name">
                    SMAN 1 KELUANG
                </div>

                <div class="school-sub">
                    Unggul • Disiplin • Berprestasi
                </div>

            </div>

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a href="/"
                        class="nav-link nav-link-custom {{ request()->is('/') ? 'active' : '' }}">
                            Beranda
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-custom dropdown-toggle
                    {{ request()->routeIs('profil.*') ? 'active' : '' }}"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">
                        Profil
                    </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item
                                    {{ request()->routeIs('profil.sekolah') ? 'active-submenu' : '' }}"
                                    href="{{ route('profil.sekolah') }}">
                                    Profil Sekolah
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item
                                    {{ request()->routeIs('profil.sejarah') ? 'active-submenu' : '' }}"
                                    href="{{ route('profil.sejarah') }}">
                                    Sejarah Sekolah
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item
                                    {{ request()->routeIs('profil.sambutan') ? 'active-submenu' : '' }}"
                                    href="{{ route('profil.sambutan') }}">
                                    Sambutan Kepala Sekolah
                                </a>
                            </li>

                        </ul>

                <li class="nav-item">
                    <a href="{{ route('visi-misi') }}"
                    class="nav-link nav-link-custom {{ request()->routeIs('visi-misi') ? 'active' : '' }}">
                        Visi Misi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('informasi.index') }}"
                        class="nav-link nav-link-custom {{ request()->routeIs('informasi.*') ? 'active' : '' }}">
                            Informasi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('ekstrakurikuler') }}"
                    class="nav-link nav-link-custom {{ request()->routeIs('ekstrakurikuler') ? 'active' : '' }}">
                        Ekstrakurikuler
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}"
                    class="nav-link nav-link-custom {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

{{-- CONTENT --}}
@yield('content')

<footer>

    <div class="container footer-top">

        <div class="row">

            <div class="col-lg-4 mb-4">

                <div class="footer-title">
                    SMA Negeri 1 Keluang
                </div>

                <div class="footer-text">
                    Musi Banyuasin, Sumatera Selatan.
                    Sekolah yang berkomitmen mencetak
                    generasi unggul, berkarakter,
                    dan siap bersaing di masa depan.
                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="footer-title">
                    Kontak
                </div>

                <div class="footer-text">
                    📍 Musi Banyuasin<br>
                    ☎️ 0888-8888-8888<br>
                    ✉️ info@sman1keluang.sch.id
                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="footer-title">
                    Ikuti Kami
                </div>

                <div class="mt-3">

                    <span class="footer-icon">
                        <i class="bi bi-facebook"></i>
                    </span>

                    <span class="footer-icon">
                        <i class="bi bi-instagram"></i>
                    </span>

                    <span class="footer-icon">
                        <i class="bi bi-youtube"></i>
                    </span>

                    <span class="footer-icon">
                        <i class="bi bi-tiktok"></i>
                    </span>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">
        © {{ date('Y') }} SMA Negeri 1 Keluang. All Rights Reserved.
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>