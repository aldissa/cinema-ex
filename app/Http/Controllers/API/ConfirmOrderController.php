<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Purchase;
use App\Models\PurchaseTicket;
use App\Models\User;
use Illuminate\Http\Request;

class ConfirmOrderController extends Controller
{
    public function index(Request $request)
    {
        $movie = Movie::where('id', $request->movie)->first();
        $time = $request->time_choose;
        $seats = $request->seats;

        $ticketPrice = 50000;
        $fee = 2000;

        $result = explode(',', $seats);

        $totalTicketPrice = $ticketPrice * count($result);
        $totalfee = $fee * count($result);
        $total = $totalTicketPrice + $totalfee;

        return view('movie.confirm_order', [
            'movie' => $movie,
            'time' => $time,
            'seats' => $seats,
            'count' => count($result),
            'total' => $total,
        ]);
    }

    public function order(Request $request)
    {
        $movie_id = $request->movie_id;
        
        $time = $request->time;
        $total = $request->total;
        $cash = $request->cash;
        $token = $request->token;

        if (!empty($movie_id) && !empty($time) && 
            !empty($total) && !empty($cash) && !empty($token)) {
                $user = User::where('remember_token', $token)->first();

                if ($user) {

                    if ($cash < $total) {
                        return response()->json([
                            'message' => 'uang pembayaran tidak boleh kurang!'
                        ]);
                    }

                    $purchase = Purchase::create([
                        'movie_id' => $movie_id,
                        'date' => date('Y-m-d'),
                        'time' => $time,
                        'total' => $total,
                        'cash' => $cash,
                        'created_by' => $user->id,
                    ]);

                    $orders = explode(',', $request->orders);

                    foreach($orders as $order) {
                        PurchaseTicket::create([
                            'purchase_id' => $purchase->id,
                            'seat' => $order,
                        ]);
                    }

                    return response()->json([
                        'Uang Kembalian' => ($cash - $total),
                        'id' => $purchase->id,
                        'message' => 'pesanan berhasil dibuat!',
                    ]);

                } else {
                    return response()->json([
                        'message' => 'anda tidak bisa akses ini!'
                    ]);
                }
        } else {
            return response()->json([
                'message' => 'parameter wajib diisi'
            ]);
        }
    }
}
