<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NU DarmaKradenan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4faf7;
            color: #164e3b;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 500px;
            position: relative;
            overflow: hidden;

            background:
                linear-gradient(
                    90deg,
                    rgba(0,70,48,.98),
                    rgba(0,126,91,.88),
                    rgba(0,170,105,.55)
                );
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;

            background:
                radial-gradient(
                    circle at 80% 20%,
                    rgba(255,255,255,.15),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 10% 80%,
                    rgba(255,255,255,.08),
                    transparent 25%
                );
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            max-width: 1000px;
            margin: auto;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            position: relative;
            z-index: 20;

            border-bottom:
                1px solid rgba(255,255,255,.2);
        }

        .logo {
            color: white;
            font-size: 20px;
            font-weight: bold;

            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;

            border: 2px solid white;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .nav-menu > a,
        .dropdown-toggle {
            color: white;
            padding: 9px 13px;
            border-radius: 20px;
            font-size: 11px;
            transition: .3s;
        }

        .nav-menu > a:hover,
        .dropdown-toggle:hover {
            background: rgba(255,255,255,.15);
        }

        .nav-menu .active {
            background: white;
            color: #087f5b;
        }

        /* =========================
           DROPDOWN
        ========================= */

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .dropdown-menu {
            position: absolute;
            top: 42px;
            right: 0;

            width: 180px;

            background: white;
            border-radius: 12px;
            padding: 7px;

            box-shadow:
                0 15px 40px rgba(0,0,0,.2);

            opacity: 0;
            visibility: hidden;

            transform: translateY(-8px);
            transition: .25s;

            z-index: 100;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu a {
            display: block;

            padding: 10px 12px;

            color: #164e3b;
            font-size: 12px;

            border-radius: 7px;
        }

        .dropdown-menu a:hover {
            background: #e7f6ee;
        }

        /* =========================
           HERO CONTENT
        ========================= */

        .hero-content {
            max-width: 1000px;
            margin: auto;

            padding-top: 55px;

            position: relative;
            z-index: 5;
        }

        .small-label {
            display: inline-block;

            padding: 6px 11px;

            border: 1px solid rgba(255,255,255,.5);
            border-radius: 20px;

            color: white;
            font-size: 9px;
        }

        .hero-title {
            color: white;

            font-size: 50px;
            line-height: .98;

            max-width: 500px;
            margin: 15px 0;

            font-weight: 800;
        }

        .hero-description {
            color: rgba(255,255,255,.9);

            max-width: 360px;

            font-size: 12px;
            line-height: 1.6;

            margin-bottom: 20px;
        }

        .hero-buttons {
            display: flex;
            gap: 10px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            background: white;
            color: #164e3b;

            padding: 10px 15px;

            border-radius: 25px;

            font-size: 11px;
            font-weight: bold;
        }

        .cta-icon {
            width: 23px;
            height: 23px;

            border-radius: 50%;

            background: #087f5b;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .secondary-button {
            padding: 10px 18px;

            color: white;

            border: 1px solid white;
            border-radius: 25px;

            font-size: 11px;
        }

        .secondary-button:hover {
            background: white;
            color: #087f5b;
        }

        /* =========================
           HERO INFO CARD
        ========================= */

        .info-card {
            position: absolute;

            right: 12%;
            bottom: 35px;

            width: 260px;

            padding: 15px;

            background: white;
            border-radius: 14px;

            display: flex;
            align-items: center;

            gap: 12px;

            box-shadow:
                0 15px 40px rgba(0,0,0,.2);

            z-index: 5;
        }

        .info-symbol {
            width: 55px;
            height: 55px;

            flex-shrink: 0;

            border-radius: 12px;

            background: #087f5b;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;
        }

        .number {
            color: #087f5b;
            font-size: 22px;
            font-weight: bold;
        }

        .info-title {
            color: #555;
            font-size: 10px;
            line-height: 1.5;
        }

        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 45px 5%;
        }

        .section-white {
            background: white;
        }

        .section-green {
            background: #effaf5;
        }

        .section-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .section-title h2 {
            font-size: 26px;
            color: #164e3b;
            margin-bottom: 5px;
        }

        .section-title p {
            color: #777;
            font-size: 12px;
        }

        /* =========================
           BANOM
        ========================= */

        .banom-grid {
            max-width: 900px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(5, 1fr);

            gap: 10px;
        }

        .banom-card {
            background: white;

            border: 1px solid #e3ece7;
            border-radius: 8px;

            overflow: hidden;

            text-align: center;

            padding: 7px;

            transition: .3s;

            box-shadow:
                0 5px 15px rgba(0,0,0,.04);
        }

        .banom-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 10px 25px rgba(0,0,0,.12);
        }

        .banom-image {
            width: 100%;
            height: 110px;

            object-fit: cover;

            border-radius: 5px;

            display: block;
        }

        .banom-name {
            color: #164e3b;

            font-size: 13px;
            font-weight: bold;

            margin-top: 8px;
        }

        .banom-desc {
            color: #777;

            font-size: 10px;

            margin-top: 5px;
            margin-bottom: 8px;
        }

        /* =========================
           BUTTON TAMBAH
        ========================= */

        .add-area {
            text-align: center;
            margin-bottom: 10px;
        }

        .add-btn {
            display: inline-block;

            background: #087f5b;
            color: white;

            padding: 8px 20px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: bold;

            transition: .3s;
        }

        .add-btn:hover {
            background: #065c43;
            transform: translateY(-2px);
        }

        /* =========================
           PROGRAM
        ========================= */

        .data-grid {
            max-width: 900px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(5, 1fr);

            gap: 8px;
        }

        .data-card {
            background: white;

            border-radius: 7px;

            overflow: hidden;

            border: 1px solid #e5eee9;

            box-shadow:
                0 4px 15px rgba(0,0,0,.05);

            transition: .3s;
        }

        .data-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 10px 25px rgba(0,0,0,.1);
        }

        .data-image {
            width: 100%;
            height: 100px;

            object-fit: cover;

            display: block;
        }

        .data-body {
            padding: 10px;
        }

        .data-body h3 {
            color: #164e3b;

            font-size: 13px;

            margin-bottom: 5px;
        }

        .data-body p {
            color: #777;

            font-size: 10px;
            line-height: 1.5;

            min-height: 35px;
        }

        .card-buttons {
            display: flex;

            gap: 4px;

            margin-top: 8px;
        }

        .btn {
            border: none;

            border-radius: 5px;

            padding: 5px 7px;

            font-size: 9px;

            cursor: pointer;
        }

        .btn-view {
            background: #087f5b;
            color: white;
        }

        .btn-edit {
            background: #e6a91f;
            color: white;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        /* =========================
           BERITA
        ========================= */

        .cards {
            max-width: 900px;
            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 15px;
        }

        .info-box {
            background: white;

            padding: 15px;

            border-radius: 15px;

            box-shadow:
                0 7px 25px rgba(0,0,0,.05);

            overflow: hidden;
        }

        .info-box-image {
            width: 100%;
            height: 140px;

            object-fit: cover;

            border-radius: 10px;

            margin-bottom: 12px;
        }

        .info-box-icon {
            width: 45px;
            height: 45px;

            background: #e7f6ee;
            color: #087f5b;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 12px;
        }

        .info-box h3 {
            margin-bottom: 7px;
            font-size: 15px;
        }

        .info-box p {
            color: #777;

            font-size: 11px;
            line-height: 1.7;
        }

        /* =========================
           GALERY
        ========================= */

        .gallery-card {
            position: relative;

            overflow: hidden;

            border-radius: 15px;

            background: white;

            box-shadow:
                0 7px 25px rgba(0,0,0,.05);
        }

        .gallery-card img {
            width: 100%;
            height: 170px;

            object-fit: cover;

            display: block;

            transition: .4s;
        }

        .gallery-card:hover img {
            transform: scale(1.07);
        }

        .gallery-caption {
            padding: 12px;

            color: #164e3b;

            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           INFAQ
        ========================= */

        .form-container {
            max-width: 600px;

            margin: auto;

            background: white;

            padding: 30px;

            border-radius: 15px;

            box-shadow:
                0 8px 30px rgba(0,0,0,.06);
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;

            color: #164e3b;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 7px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;

            padding: 11px;

            border: 1px solid #ddd;

            border-radius: 7px;

            outline: none;
        }

        .form-group textarea {
            height: 120px;

            resize: vertical;
        }

        .submit-btn {
            width: 100%;

            border: none;

            background: #087f5b;

            color: white;

            padding: 12px;

            border-radius: 7px;

            cursor: pointer;

            font-weight: bold;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            background: #063f30;

            color: white;

            text-align: center;

            padding: 25px;

            font-size: 11px;
        }

        .footer strong {
            color: #70d69f;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 900px) {

            .navbar {
                padding: 0 20px;
            }

            .hero-content {
                padding-left: 20px;
            }

            .info-card {
                right: 4%;
            }

            .banom-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .data-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media(max-width: 650px) {

            .navbar {
                height: auto;

                padding: 12px 15px;

                flex-direction: column;

                gap: 10px;
            }

            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {
                min-height: 700px;
            }

            .hero-content {
                padding: 50px 20px 0;
            }

            .hero-title {
                font-size: 38px;
            }

            .info-card {
                position: relative;

                right: auto;
                bottom: auto;

                margin: 40px auto 0;

                width: 85%;
            }

            .banom-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .data-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 400px) {

            .banom-grid,
            .data-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 32px;
            }
        }

    </style>
</head>

<body>


{{-- =====================================================
     HERO
===================================================== --}}

<section class="hero">

    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">

            <span class="logo-icon">
                ✺
            </span>

            NU Darma

        </a>


        <div class="nav-menu">

            <a href="{{ route('home') }}"
               class="active">
                Beranda
            </a>

            <a href="#berita">
                Berita
            </a>

            <a href="#kegiatan">
                Kegiatan
            </a>

            <a href="#galery">
                Galery
            </a>

            <a href="#infaq">
                Infaq Masjid
            </a>

            <a href="#saran">
                Saran & Kritik
            </a>


            <div class="dropdown">

                <a href="#banom"
                   class="dropdown-toggle">

                    Banom NU
                    ⌄

                </a>

                <div class="dropdown-menu">

                    <a href="#banom">
                        IPPNU
                    </a>

                    <a href="#banom">
                        IPNU
                    </a>

                    <a href="#banom">
                        Fatayat NU
                    </a>

                    <a href="#banom">
                        Muslimat NU
                    </a>

                    <a href="#banom">
                        Banser
                    </a>

                </div>

            </div>


            <a href="{{ route('banom.index') }}">
                Control
            </a>

        </div>

    </nav>


    <div class="hero-content">

        <span class="small-label">
            NU DARMA • KRADENAN • BANYUMAS
        </span>


        <h1 class="hero-title">

            Bergerak Bersama
            <br>
            Untuk Umat.

        </h1>


        <p class="hero-description">

            NU Darma hadir sebagai wadah untuk
            mengembangkan pendidikan, sosial,
            ekonomi, dan kegiatan keagamaan
            demi kemajuan masyarakat.

        </p>


        <div class="hero-buttons">

            <a href="#program"
               class="cta-button">

                Mulai Program

                <span class="cta-icon">
                    →
                </span>

            </a>


            <a href="#program"
               class="secondary-button">

                Lihat Program

            </a>

        </div>

    </div>


    <div class="info-card">

        <div class="info-symbol">
            ✺
        </div>

        <div>

            <div class="number">
                NU
            </div>

            <div class="info-title">

                Nahdlatul Ulama
                <br>
                Bersama Membangun Umat

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     BANOM
===================================================== --}}

<section class="section section-white"
         id="banom">

    <div class="section-title">

        <h2>
            BANOM NU
        </h2>

        <p>
            Badan Otonom Nahdlatul Ulama
        </p>

    </div>


    <div class="banom-grid">

        @forelse($banoms as $banom)

            <div class="banom-card">

                @if($banom->gambar)

                    <img
                        src="{{ asset('storage/' . $banom->gambar) }}"
                        class="banom-image"
                        alt="{{ $banom->nama }}"
                    >

                @else

                    <div
                        class="banom-image"
                        style="
                            background:#e7f6ee;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:30px;
                            color:#087f5b;
                        "
                    >
                        ✺
                    </div>

                @endif


                <div class="banom-name">
                    {{ $banom->nama }}
                </div>

                <div class="banom-desc">
                    {{ $banom->deskripsi }}
                </div>

            </div>

        @empty

            <div style="
                grid-column:1/-1;
                text-align:center;
                padding:30px;
            ">

                <p>
                    Belum ada data Banom.
                </p>

                <br>

                <a href="{{ route('banom.create') }}"
                   class="add-btn">

                    + Tambah Banom

                </a>

            </div>

        @endforelse

    </div>

</section>



{{-- =====================================================
     PROGRAM NU DARMA
===================================================== --}}

<section class="section section-green"
         id="program">

    <div class="section-title">

        <h2>
            Program NU Darma
        </h2>

        <p>
            Berbagai program dan kegiatan untuk masyarakat
        </p>

    </div>


    <div class="add-area">

        <a href="{{ route('darma.create') }}"
           class="add-btn">

            + Tambah Program

        </a>

    </div>


    <br>


    <div class="data-grid">

        @forelse($darmas as $darma)

            <div class="data-card">

                @if($darma->gambar)

                    <img
                        src="{{ asset('storage/' . $darma->gambar) }}"
                        class="data-image"
                        alt="{{ $darma->judul }}"
                    >

                @else

                    <div
                        class="data-image"
                        style="
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:40px;
                            color:#087f5b;
                            background:#e7f6ee;
                        "
                    >
                        ✺
                    </div>

                @endif


                <div class="data-body">

                    <h3>
                        {{ $darma->judul }}
                    </h3>

                    <p>
                        {{ $darma->deskripsi }}
                    </p>


                    <div class="card-buttons">

                        <a
                            href="{{ route('darma.show', $darma->id) }}"
                            class="btn btn-view"
                        >
                            Detail
                        </a>


                        <a
                            href="{{ route('darma.edit', $darma->id) }}"
                            class="btn btn-edit"
                        >
                            Edit
                        </a>


                        <form
                            action="{{ route('darma.destroy', $darma->id) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus program ini?')"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-delete"
                            >
                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div style="
                grid-column:1/-1;
                text-align:center;
                padding:50px;
            ">

                <h3>
                    Belum Ada Program
                </h3>

                <p style="
                    color:#777;
                    margin:10px 0 20px;
                ">

                    Silakan tambahkan program NU Darma.

                </p>

                <a
                    href="{{ route('darma.create') }}"
                    class="add-btn"
                >

                    + Tambah Program

                </a>

            </div>

        @endforelse

    </div>

</section>



{{-- =====================================================
     BERITA
===================================================== --}}

<section class="section section-white"
         id="berita">

    <div class="section-title">

        <h2>
            Berita NU
        </h2>

        <p>
            Informasi terbaru NU DarmaKradenan
        </p>

    </div>


    <div class="cards">


        <div class="info-box">

            <img
                src="{{ asset('https://storage.nu.or.id/storage/post/1_1/mid/1001522696_1764690776.webp') }}"
                class="info-box-image"
                alt="Rapat Koordinasi"
            >

            <h3>
                Rapat Koordinasi
            </h3>

            <p>
                NU Darma melakukan rapat koordinasi
                program kerja bersama pengurus.
            </p>

        </div>



        <div class="info-box">

            <img
                src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ85S7z7jaNYzw_rVvzuYHEmviggCd8G9prNRpZimJg7w&s=10') }}"
                class="info-box-image"
                alt="Bakti Sosial"
            >

            <h3>
                Bakti Sosial
            </h3>

            <p>
                Kegiatan sosial bersama masyarakat
                DarmaKradenan.
            </p>

        </div>



        <div class="info-box">

            <img
                src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShBYGvskwq_HWoIx2DWSwtNEjtVvnWNwFCVmwh1AER-g&s=10') }}"
                class="info-box-image"
                alt="Hari Santri"
            >

            <h3>
                Peringatan Hari Santri
            </h3>

            <p>
                Kegiatan peringatan Hari Santri
                bersama masyarakat.
            </p>

        </div>

    </div>

</section>



{{-- =====================================================
     KEGIATAN
===================================================== --}}

<section class="section section-green"
         id="kegiatan">

    <div class="section-title">

        <h2>
            Kegiatan NU
        </h2>

        <p>
            Kegiatan sosial dan keagamaan
        </p>

    </div>


    <div class="cards">


        <div class="info-box">

            <img
                src="{{('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbu5RS2yOqZfn7sHZ1c3UAXQCxwrduXHSSs0MHz9AeTg&s=10') }}"
                class="info-box-image"
                alt="Kegiatan Keagamaan"
            >

            <h3>
                Kegiatan Keagamaan
            </h3>

            <p>
                Pengajian dan kegiatan
                keagamaan masyarakat.
            </p>

        </div>



        <div class="info-box">

            <img
                src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVi2IVYZlvAbfHlxKhI8oIUJ_c5zTMFr4QCrmgSx9vhQ&s=10') }}"
                class="info-box-image"
                alt="Kegiatan Sosial"
            >

            <h3>
                Kegiatan Sosial
            </h3>

            <p>
                Kegiatan sosial dan
                kemanusiaan.
            </p>

        </div>



        <div class="info-box">

            <img
                src="{{ asset('https://www.nusidoarjo.or.id/wp-content/uploads/2026/03/PR-IPNU-IPPNU-Plumbungan-scaled-e1772426519700.jpeg') }}"
                class="info-box-image"
                alt="Pendidikan"
            >

            <h3>
                Pendidikan
            </h3>

            <p>
                Program pendidikan
                generasi muda.
            </p>

        </div>

    </div>

</section>



{{-- =====================================================
     GALERY
===================================================== --}}

<section class="section section-white"
         id="galery">

    <div class="section-title">

        <h2>
            Galery
        </h2>

        <p>
            Dokumentasi kegiatan NU DarmaKradenan
        </p>

    </div>


    <div class="cards">


        <div class="gallery-card">

            <img
                src="{{ asset('https://nubanyumas.com/wp-content/uploads/2026/01/20260121_183304_0000.jpg') }}"
                alt="Dokumentasi NU"
            >

            <div class="gallery-caption">
                Dokumentasi Kegiatan NU
            </div>

        </div>



        <div class="gallery-card">

            <img
                src="{{ asset('https://assets.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/2023/02/14/4052378104.jpg') }}"
                alt="Video Kegiatan"
            >

            <div class="gallery-caption">
                Kegiatan Masyarakat
            </div>

        </div>



        <div class="gallery-card">

            <img
                src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrq1sqqrEVkNdQ0MuBjYabc_hyWtWcVEd7ghunEYhvsuEqVAQWZbqqtM0a&s=10') }}"
                alt="Foto Kegiatan"
            >

            <div class="gallery-caption">
                Foto Kegiatan Organisasi
            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     INFAQ
===================================================== --}}

<section class="section section-green"
         id="infaq">

    <div class="section-title">

        <h2>
            Infaq Masjid
        </h2>

        <p>
            Mari bersama membantu kemakmuran masjid
        </p>

    </div>


    <div class="form-container"
         style="text-align:center;">

        <img
            src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_9EUKGt9HJzjGlEaEPg7OKdIPIT9W9ThUsnghAstww&s=10') }}"
            style="
                width:100%;
                height:180px;
                object-fit:cover;
                border-radius:12px;
                margin-bottom:20px;
            "
            alt="Masjid"
        >


        <h3>
            Mari Berinfaq
        </h3>


        <br>


        <p style="
            color:#777;
            line-height:1.7;
            font-size:12px;
        ">

            Infaq digunakan untuk mendukung
            kegiatan masjid dan sosial masyarakat.

        </p>


        <br>


        <a href="#saran"
           class="add-btn">

            Informasi Infaq

        </a>

    </div>

</section>



{{-- =====================================================
     SARAN & KRITIK
===================================================== --}}

<section class="section section-white"
         id="saran">

    <div class="section-title">

        <h2>
            Saran & Kritik
        </h2>

        <p>
            Sampaikan saran untuk kemajuan NU DarmaKradenan
        </p>

    </div>


    <div class="form-container">

        <div class="form-group">

            <label>
                Nama
            </label>

            <input
                type="text"
                placeholder="Masukkan nama"
            >

        </div>


        <div class="form-group">

            <label>
                Email
            </label>

            <input
                type="email"
                placeholder="Masukkan email"
            >

        </div>


        <div class="form-group">

            <label>
                Saran / Kritik
            </label>

            <textarea
                placeholder="Tuliskan saran atau kritik..."
            ></textarea>

        </div>


        <button
            type="button"
            class="submit-btn"
        >

            Kirim Saran

        </button>

    </div>

</section>



{{-- =====================================================
     FOOTER
===================================================== --}}

<footer class="footer">

    © {{ date('Y') }}

    <strong>
        NU DarmaKradenan
    </strong>

    — Bergerak Bersama Untuk Umat.

</footer>


</body>
</html>