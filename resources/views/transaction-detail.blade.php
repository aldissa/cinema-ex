<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaction Detail - Chandra Subang Cinema</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="list-movies.html">Chandra Cinema</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="list-movies.html">
                    List Film
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transaction-histories.html">
                    Riwayat Transaksi
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    kasir1
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="change-password.html">Ubah Password</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" onclick="event.preventDefault();document.getElementById('form-logout').submit()" class="dropdown-item">Logout</a>
                    <form action="index.html" id="form-logout" method="post"><input type="hidden" name="_token" value="8SEIRsSwnoGEnflD8f1JMLXBrvx6TFMscHse80mV"></form>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main class="content py-4">
    <div class="container">
        <div class="alert alert-success">Pesanan berhasil dibuat.</div>

        <h3 class="my-4">Detail Pemesanan</h3>

        <div class="row py-1" style="max-width: 400px">
            <div class="col-6">Film</div>
            <div class="col text-start">Gara - Gara Warisan</div>
        </div>
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6">Waktu</div>
            <div class="col text-start">10:00</div>
        </div>
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6">Tempat Duduk</div>
            <div class="col text-start">D05 dan D06</div>
        </div>
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6">Studio</div>
            <div class="col text-start">Tulip</div>
        </div>
        <hr style="max-width: 400px" />
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6 text-start">Harga Tiket</div>
            <div class="col text-start">Rp 50.000 x 2</div>
        </div>
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6 text-start">Biaya Layanan</div>
            <div class="col text-start">Rp 2.000 x 2</div>
        </div>
        <hr style="max-width: 400px" />
        <div class="row py-1" style="max-width: 400px">
            <div class="col-6 text-start"><b>Total Bayar</b></div>
            <div class="col text-start"><b>Rp 104.000</b></div>
        </div>
        <hr style="max-width: 400px" />
        <div class="row py-1 d-flex align-items-center" style="max-width: 400px">
            <div class="col-6 text-start"><b>Jumlah Uang</b></div>
            <div class="col text-start"><b>Rp 120.000</b></div>
        </div>
        <div class="row py-1 d-flex align-items-center" style="max-width: 400px">
            <div class="col-6 text-start"><b>Kembalian</b></div>
            <div class="col text-start"><b>Rp 16.000</b></div>
        </div>

        <a href="print-tickets.html" class="btn btn-warning my-5 me-3">Cetak Tiket</a>
        <a href="transaction-histories.html" class="btn btn-light my-5">Lihat Riwayat Transaksi</a>
    </div>
</main>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>



