<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HRF trans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('resources/css/index.css')}}" />

    <style>
        .nav-link {
            color: black;
        }

        .hero-section {
            position: relative;
            margin-top: 30px;
            height: 530px;
            overflow: hidden;
            background: linear-gradient(90deg, #f43838 0%, #d45a5aaf 100%);
        }

        .hero-mobil {
            position: absolute;
            right: 0;
            top: 70px;
        }

        .content {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-lg" style="background-color: #fff">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="{{url('/')}}"> HRF TRANS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto fw-semibold">
                    <a class="nav-link" href="#jenis-harga" style="padding-right: 40px">Sewa Mobil</a>
                    <a class="nav-link" href="#kontak-kami" style="padding-right: 40px">Kontak Kami</a>
                    <a class="nav-link" href="{{url('/sign-in')}}">Akun</a>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="hero-section">
            <img src="{{ asset('image/mobil-hero.png') }}" alt="" class="hero-mobil" />
            <div class="container content">
                <div class="row">
                    <div class="col-7">
                        <h1>Sewa Mobil Malang Armada Lengkap & Terbaru</h1>
                        <p>
                            Sewa Mobil di Malang adalah solusi ideal bagi para wisatawan
                            yang ingin menjelajahi Kota Malang dengan lebih leluasa.
                        </p>
                        <a href="#jenis-harga">
                            <button class="btn" style="
                    color: #fff;
                    background-color: #e8a417;
                    text-align: center;
                    height: 4rem;
                    font-size: 20px;
                  ">
                                Pesan Sekarang
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="penjelasan-singkat">
        <div class="container">
            <div style="width: 75%; margin: 60px auto; font-size: 24px">
                <p>
                    Sewa Mobil di Malang merupakan alat transportasi pilihan terbaik
                    bagi Anda yang akan berwisata di Kota Malang, karena tidak semua
                    destinasi wisata bisa diakses oleh angkutan umum.
                </p>
                <p>
                    Sebagai solusi perjalanan wisata Anda, HRF TRANS Sewa Mobil Malang
                    hadir dengan pelayanan terbaik dan memiliki armada lengkap, mulai
                    dari Honda Jazz, Brio, Ayla, Xpander, New Avanza, Innova Reborn,
                    Fortuner, Hiace Long Elf & Bus Pariwisata.
                </p>
            </div>
        </div>
    </section>
    <section id="jenis-harga">
        <h2 style="text-align: center">Jenis & Harga Sewa Mobil Malang Murah</h2>
        <div class="container mt-4">
            <div class="row" style="height: 220px">
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Daihatsu Ayla</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />4
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Group 1.png') }}" alt="" style="object-fit: none" />
                                            2
                                        </div>
                                        <div class="d-flex" style="align-items: center">
                                            <img src="{{ asset('image/Car.png') }}" alt="" style="object-fit: none" />
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 200.000</span>
                                        / hari (manual) <br />
                                        <span style="color: red"> IDR 200.000</span>
                                        / hari (matic)
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/daihatsu ayla.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/ayla')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Toyota Agya</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />5
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Group 1.png') }}" alt="" style="object-fit: none" />
                                            2
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Car.png') }}" alt="" style="object-fit: none" />
                                            Matic
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 250.000 </span>
                                        / hari
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/agya.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/agya')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 220px">
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Grand New Avanza</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />7
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Group 1.png') }}" alt="" style="object-fit: none" />
                                            2
                                        </div>
                                        <div class="d-flex" style="align-items: center">
                                            <img src="{{ asset('image/Car.png') }}" alt="" style="object-fit: none" />
                                            Manual
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 300.000 </span>
                                        / hari
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/avanza.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/avanza')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Honda Mobilio</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />5
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/gGoup 1.png') }}" alt="" style="object-fit: none" />
                                            2
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Car.png') }}" alt="" style="object-fit: none" />
                                            Matic
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 350.000 </span>
                                        / hari
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/mobilio.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/mobilio')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 220px">
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Isuzu Elf Long</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />20
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Group 1.png') }}" alt="" style="object-fit: none" />
                                            3
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 1.100.000 </span>
                                        / hari
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/ELF.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/elf')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-0 shadow-lg" style="background-color: #fff">
                        <div class="container">
                            <div class="row py-3 px-4">
                                <div class="col-6">
                                    <h5>Toyota Hiace</h5>
                                    <div class="d-flex" style="gap: 16px">
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/user.png') }}" alt="" style="object-fit: none" />15
                                        </div>
                                        <div class="d-flex" style="align-items: center; gap: 4px">
                                            <img src="{{ asset('image/Group 1.png') }}" alt="" style="object-fit: none" />
                                            3
                                        </div>
                                    </div>
                                    <p style="margin-top: 1rem">
                                        Mulai dari <br />
                                        <span style="color: red"> IDR 900.000 </span>
                                        / hari
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="container d-flex flex-column" style="align-content: center; align-items: center">
                                        <img src="{{ asset('image/Hiace.png') }}" alt="" style="object-fit: cover; max-height: 120px" />
                                        <form action="pemesanan.php">
                                            <a href="{{url('/pemesanan/hiace')}}" class="btn" style="color: #fff;
                            height: 32px;
                            border-radius: 50px;
                            background-color: red;
                            text-align: center;">Pilih</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kontak-kami">
        <h1 style="text-align: center">KONTAK KAMI</h1>
        <div class="bg" style="background-color: #d45a5a; height: 600px; position: relative">
            <div class="container content">
                <div class="row justify-content-center" style="margin-top: 150px">
                    <div class="col-5">
                        <p>Alamat <br />Jl. Untung Suropati Selatan No. 6 Malang</p>
                        <p>Telepon <br />0812345678</p>
                        <p>Email <br />hrftrans@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('image/Maps.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>