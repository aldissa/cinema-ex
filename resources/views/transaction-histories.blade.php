<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaction Histories - Chandra Subang Cinema</title>
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
        <h3 class="my-4">Riwayat Transaksi</h3>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Film</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Tempat Duduk</th>
                <th>Dibuat Oleh</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Gara - Gara Warisan</td>
                <td>24 May 2022</td>
                <td>10:00</td>
                <td>D05 dan D06.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Gara - Gara Warisan</td>
                <td>24 May 2022</td>
                <td>10:00</td>
                <td>C03.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Gara - Gara Warisan</td>
                <td>24 May 2022</td>
                <td>10:00</td>
                <td>B05 dan B06.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Gara - Gara Warisan</td>
                <td>24 May 2022</td>
                <td>10:00</td>
                <td>D08 dan D09.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Gara - Gara Warisan</td>
                <td>24 May 2022</td>
                <td>10:00</td>
                <td>A10 dan A11.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>KKN Di Desa Penari</td>
                <td>24 May 2022</td>
                <td>13:00</td>
                <td>E05 dan E06.</td>
                <td>kasir1</td>
                <td>
                    <a href="print-tickets.html" class="btn btn-warning btn-sm me-2"
                    >Cetak Tiket</a
                    >
                    <a href="transaction-detail.html" class="btn btn-light btn-sm me-2"
                    >Detail</a
                    >
                    <a href="" class="btn btn-light text-danger btn-sm">Hapus</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>



