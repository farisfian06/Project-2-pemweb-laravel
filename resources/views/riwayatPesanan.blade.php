<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-lg d-block" style="background-color: #fff">
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
    @foreach ($pesanan as $row)
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-lg-3">

                    <div class="container card rounded-5 p-4" style="background-color: #ffb6b6;">
                        <div class="d-flex" style="align-items: center; gap: 4px">
                            <img src="img/Car.png" alt="" style="object-fit: none" />
                            <h1>
                                {{$row->mobil['nama']}}
                            </h1>
                        </div>
                        <H3>Nama Peminjam</H3>
                        <p><?= $row["nama"] ?></p>
                        <H3>Nomor telepon</H3>
                        <p><?= $row["telepon"] ?></p>
                        <h3>Tanggal peminjaman</h3>
                        <p><?= $row["tanggal_peminjaman"] ?></p>
                        <h3>Tanggal pengembalian</h3>
                        <p><?= $row["tanggal_pengembalian"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</body>

</html>