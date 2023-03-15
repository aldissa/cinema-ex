<?php

namespace App\Http\Controllers\API;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showMovies(Request $request)
    {
        $token =Auth::user()->remember_token;

        if (!empty($token)) {
            $user = User::where('remember_token', $token)->first();
            
            if ($user) {
                $movies = Movie::with('genre')->get();

                // return response()->json($movies);
                return view('movie.index', ['movie' => $movies]);
            } else {
                // return response()->json([
                //     'message' => 'anda tidak bisa akses ini!'
                // ]);
                return redirect()->back()->with('message', 'Anda tidak bisa akses ini');
            }
            
            // $movies = Movie::with('genre')->get();
           
            // return response()->json($movies, 200);
            
        } else {
            // return response()->json([
                //     'message' => 'token tidak boleh kosong!'
                // ]);
                return redirect()->back()->with('message', 'Token tidak boleh kosong+');
        }
    }
}
