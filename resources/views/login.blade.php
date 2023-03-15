@extends('layout.app')

@section('title', 'login')

@section('body')
<main class="content py-4">
    <div class="container">
        <h1 class="my-5 text-center">OriCinema</h3>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">Login</h5>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="username" class="mb-2">Username</label>
                                    <input type="text" name="username" class="form-control" autofocus>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="username" class="mb-2">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-warning">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
@endsection