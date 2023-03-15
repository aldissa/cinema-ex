<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function detail(Request $request)
    {
        $token = $request->token;
        $purchase_id = $request->purchase_id;

        if (!empty($token) && !empty($purchase_id)) {
            $user = User::where('remember_token', $token) ->first();

            if ($user) {
                $purchase = Purchase::with('movie', 'ticket')->where('id', $purchase_id)->first();

                $change_money = $purchase->cash - $purchase->total;

                return response()->json([
                    'id' => $purchase_id,
                    'purchase' => $purchase,
                    'change_money' => $change_money,
                ]);

            } else {
                return response()->json([
                    'message' => 'anda tidak bisa akses ini'
                ]);
            }

        } else {
            return response()->json([
                'message' => 'parameter wajib diisi!'
            ]);
        }
    }

    public function index(Request $request)
    {
        $token = $request->token;

        if (!empty($token)) {
            $user = User::where('remember_token', $token)->first();

            if($user){
                $purchase = Purchase::with('movie', 'ticket')->get();

                return response()->json([
                    'purchase' => $purchase
                ]);
            } else {
                return response()->json([
                    'message' => 'Anda tidak bisa mengakses ini'
                ]);
            }

        } else {
            return response()->json([
                'message' => 'Parameter wajib di isi'
            ]);
        }
    }
}
