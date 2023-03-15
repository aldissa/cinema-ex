<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Purchase;
use App\Models\PurchaseTicket;
use App\Models\User;
use Illuminate\Http\Request;

class SeatSelectionController extends Controller
{
    public function index(Request $request)
    {
        $movie_id = $request->movie_id;
        $time = $request->time;
        $token = $request->token;

        if (!empty($movie_id) && !empty($time) && !empty($token)) {
            $user = User::where('remember_token', $token)->first();

            if ($user) {
                $purchase = Purchase::where([
                    ['movie_id', $movie_id],
                    ['time', $time]
                ])->with(['ticket'])->get();

                $movie = Movie::where('id', $movie_id)->get();
                
                if ($purchase != null) {
                    $tickets = [];
                    foreach ($purchase as $value) {
                        $ticket = PurchaseTicket::where('purchase_id', $value->id)->get();
                        $tickets[] = $ticket;
                    }
    
                    $seats_sold = [];
                    foreach ($tickets as $ticket) {
                        foreach ($ticket as $v) {
                            $seats_sold[] = $v->seat;
                        }
                    }
    
                    return view('movie.seat_selection', [
                        'date' => date('d F'),
                        'movie' => $movie,
                        'time_choose' => $request->time,
                        'purchase' => $purchase,
                        'seats_sold' => $seats_sold,
                        'sold_total' => count($seats_sold),
                    ]);
                    
                } else {
                    return view('movie.seat_selection', [
                        'date' => date('d F'),
                        'movie' => $movie, 
                        'time_choose' => $request->time,
                        'purchase' => $purchase,
                        'seats_sold' => [],
                        'sold_total' => 0,
                    ]);
                }


            } else {
                return redirect()->back()->with('message', 'anda tidak bisa akses ini!');
                // return response()->json([
                //     'message' => 'anda tidak bisa akses ini!'
                // ]);
            }
        } else {
            return redirect()->back()->with('message', 'parameter wajib di isi!');
            // return response()->json([
            //     'message' => 'parameter wajib diisi'
            // ]);
        }
    }
}
