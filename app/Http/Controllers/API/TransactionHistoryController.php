<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
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
