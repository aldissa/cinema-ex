@extends('layout.app')

@section('title', 'Seat Selection')

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
                    <a class="nav-link dropdown-toggle" href="{{ route('logout') }}" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <p class="text-center text-muted mb-2">
                {{ $movie[0]->name }} ({{ $movie[0]->studio_name }})
            </p>
            <h5 class="text-center text-muted mb-4">
                {{ $date }}<span class="mx-3">|</span> {{ $time_choose }}
            </h5>

            <form action="{{ route('confirmOrder', [
                'movie' => $movie[0]->id,
                'time_choose' => $time_choose
            ]) }}" method="POST">
            @csrf
                @php
                    $seatType = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                @endphp
                @for ($i = 0; $i < 7; $i++)
                    <div class="row d-flex justify-content-around mb-4">
                        <div class="col-5 d-flex justify-content-around">
                            @for ($j = 0; $j < 6; $j++)
                                <div class="seat">
                                    <input onclick="getCheckedBoxes('seats[]')" type="checkbox" name="seats[]"
                                        id="checkbox-{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        value="{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        {{ in_array($seatType[$i] . sprintf('%02d', $j + 1), $seats_sold) ? 'disabled' : '' }} />
                                    <label for="checkbox-{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        class="btn {{ in_array($seatType[$i] . sprintf('%02d', $j + 1), $seats_sold) ? 'btn-light' : 'btn-dark' }}">{{ $seatType[$i] . sprintf('%02d', $j + 1) }}</label>
                                </div>
                            @endfor
                        </div>
                        <div class="col-5 d-flex justify-content-around">
                            @for ($j = 6; $j < 12; $j++)
                                <div class="seat">
                                    <input onclick="getCheckedBoxes('seats[]')" type="checkbox" name="seats[]"
                                        id="checkbox-{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        value="{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        {{ in_array($seatType[$i] . sprintf('%02d', $j + 1), $seats_sold) ? 'disabled' : '' }} />
                                    <label for="checkbox-{{ $seatType[$i] . sprintf('%02d', $j + 1) }}"
                                        class="btn {{ in_array($seatType[$i] . sprintf('%02d', $j + 1), $seats_sold) ? 'btn-light' : 'btn-dark' }}">{{ $seatType[$i] . sprintf('%02d', $j + 1) }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endfor

                <input type="hidden" name="seats" id="seats_selected">
                <div class="text-center my-5">
                    <button type="submit" class="btn btn-warning" value="button">
                        Selesai memilih
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script>
        function getCheckedBoxes(chkboxName) {
            var checkboxes = document.getElementsByName(chkboxName);
            var checkboxesChecked = [];
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    checkboxesChecked.push(checkboxes[i]);
                }
            }

            let seats = [];
            for (let i = 0; i < checkboxesChecked.length; i++) {
                const element = checkboxesChecked[i];
                seats.push(element.id.replace('checkbox-', ''))
            }

            document.getElementById('seats_selected').value = seats;
        }
    </script>
@endsection
