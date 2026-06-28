```blade
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-3" href="#">

            <!-- Ganti dengan logo sekolah -->
            <img src="{{ asset('images/logo.png') }}"
                 class="logo-img">

            <div>
                <div class="logo-title">
                    SMAN 1 KELUANG
                </div>

                <div class="logo-subtitle">
                    Unggul, Disiplin, Berprestasi
                </div>
            </div>

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end"
             id="menu">

            <div class="d-flex gap-3">

                <a href="#" class="menu-btn active">
                    Beranda
                </a>

                <a href="#" class="menu-btn">
                    Profil
                </a>

                <a href="#" class="menu-btn">
                    Visi Misi
                </a>

                <a href="#" class="menu-btn">
                    Informasi
                </a>

                <a href="#" class="menu-btn">
                    Ekstrakurikuler
                </a>

                <a href="#" class="menu-btn">
                    Contact
                </a>

            </div>

        </div>

    </div>
</nav>
```
