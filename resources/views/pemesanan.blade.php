<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

    <style>
        #namaMobil input[type="text"] {
            background-color: transparent;
            border: none;
            outline: none;
            text-align: center;
        }

        #namaMobil input[type="text"]:disabled {
            pointer-events: none;
        }
    </style>
</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg fixed-top shadow-lg" style="background-color: #fff">
            <div class="container">
                <a class="navbar-brand fw-bold fs-3" href="{{url('/')}}">
                    <img src="img/logo-kelana-kampus.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top" />
                    HRF TRANS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto fw-semibold">
                        <a class="nav-link" href="{{url('/#jenis-harga')}}" style="padding-right: 40px">Sewa Mobil</a>
                        <a class="nav-link" href="{{url('/')}}" style="padding-right: 40px">Kontak Kami</a>
                        <a class="nav-link" href="{{url('/sign-in')}}">Akun</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
            <div class="row" style="margin-top: 100px">
                <div class="col-6 offset-lg-3">
                    <h3 style="text-align: center">Detail Pemesanan</h3>
                    <form action="/riwayat-pemesanan" class="card rounded-5 p-3" style="background-color: #ffb6b6 " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div id="namaMobil" style="display: flex; justify-content: center;">
                                <input value="{{$namaMobil}}" class="fw-bold fs-2" type="text" name="nama_mobil" id="nama_mobil">
                            </div>
                            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="form-control py-3 mt-4" />
                            <input type="text" id="telepon" name="telepon" class="form-control py-3 mt-4" placeholder="Nomor telepon" />
                            <input type="text" name="email" id="email" class="form-control py-3 mt-4" placeholder="Alamat email" />

                            <div class="row mt-4">
                                <div class="col-5">
                                    <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control py-3" placeholder="Tanggal peminjaman" />
                                </div>
                                <div class="col-2">
                                    <img src="img/Resize Horizontal.png" alt="" />
                                </div>
                                <div class="col-5">
                                    <input name="tanggal_pengembalian" id="tanggal_pengembalian" type="date" class="form-control py-3" placeholder="Tanggal pengembalian" />
                                </div>
                                <label for="bukti">Kirim bukti transaksi</label>
                                <input type="file" id="bukti" class="form-control" name="bukti" />
                                <button type="submit" class="btn text-center rounded-3 fw-semibold mt-3" name="submit" style="background-color: red">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>