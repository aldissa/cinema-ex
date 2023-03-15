@extends('layout.app')

@section('title', 'List Movie')
    
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
        <h3 class="my-4">List Film</h3>
        <div class="row">
            @foreach ($movie as $movie)
            <div class="col-6">
                <div class="row d-flex mb-5">
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="KKN Di Desa Penari" style="height: 185px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card-body mb-4">
                            <h4 class="card-title mb-3">{{ $movie->name }}</h4>
                            <div>
                                <div class="row">
                                    <div class="col text-muted">Studio</div>
                                    <div class="col">{{ $movie->studio_name }} <span class="text-muted"> {{ $movie->studio_capacity }}</span></div>
                                </div>
                                <div class="row">
                                    <div class="col text-muted">Genre</div>
                                    <div class="col">{{ $movie->genre->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col text-muted">Durasi</div>
                                    <div class="col">{{ $movie->minutes }} Menit</div>
                                </div>
                                <div class="row">
                                    <div class="col text-muted">Sutradara</div>
                                    <div class="col">{{ $movie->name }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <a href="{{ route('seatSelection',['movie_id'=>$movie->id,'time'=>'10:00','token'=>Auth::user()->remember_token]) }}" class="btn btn-light me-3">10:00</a>
                            <a href="{{ route('seatSelection',['movie_id'=>$movie->id,'time'=>'13:00','token'=>Auth::user()->remember_token]) }}" class="btn btn-light me-3">13:00</a>
                            <a href="{{ route('seatSelection',['movie_id'=>$movie->id,'time'=>'16:00','token'=>Auth::user()->remember_token]) }}" class="btn btn-light me-3">16:00</a>
                            <a href="{{ route('seatSelection',['movie_id'=>$movie->id,'time'=>'19:00','token'=>Auth::user()->remember_token]) }}" class="btn btn-light me-3">19:00</a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</main>
@endsection