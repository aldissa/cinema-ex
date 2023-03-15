<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seat Selection - Chandra Subang Cinema</title>
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



<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-bottom">
    <div class="container d-flex justify-content-center">
        <span class="text-white">Layar Bioskop Disini</span>
    </div>
</nav>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
