@extends('layout.app')

@section('title', 'Konfirmasi Order')
    
@section('body')
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
                    {{ Auth::user()->username }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('changePassword') }}">Ubah Password</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<main class="content py-4">
    <div class="container">
        <h3 class="my-4">Konfirmasi Pemesanan</h3>

        <form action="{{ route('confirmOrder') }}">
            @csrf
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6">Film</div>
                <div class="col text-start">{{ $movie->name }}</div>
            </div>
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6">Waktu</div>
                <div class="col text-start">{{ $time }}</div>
            </div>
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6">Tempat Duduk</div>
                <div class="col text-start">{{ $seats }}</div>
            </div>
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6">Studio</div>
                <div class="col text-start">{{ $movie->studio_name }}</div>
            </div>
            <hr style="max-width: 400px" />
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6 text-start">Harga Tiket</div>
                <div class="col text-start">Rp 50.000 x {{ $count }}</div>
            </div>
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6 text-start">Biaya Layanan</div>
                <div class="col text-start">Rp 2.000 x {{ $count }}</div>
            </div>
            <hr style="max-width: 400px" />
            <div class="row py-1" style="max-width: 400px">
                <div class="col-6 text-start"><b>Total Bayar</b></div>
                <div class="col text-start"><b>Rp {{ $total }}</b></div>
            </div>
            <hr style="max-width: 400px" />
            <div class="row py-1 d-flex align-items-center" style="max-width: 400px">
                <div class="col-6 text-start"><b>Jumlah Uang</b></div>
                <div class="col text-start">
                    <input type="number" name="cash" class="form-control" autofocus />
                </div>
            </div>

            <button type="submit" class="btn btn-warning my-5">Buat Pesanan</button>
        </form>
    </div>
</main>
@endsection