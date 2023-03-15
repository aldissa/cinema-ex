<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
               'username'=> 'required|string',
               'password'=> 'required|min:6' 
        
        ]   );

        if ($validator->fails()) {
            // return response()->json([
            //     'message'=> $validator->errors(),
            // ], 401);

            return redirect()->back()->with('message', 'Invalid field');
        }

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $auth = Auth::attempt($credentials);

        if($auth) {
            auth::user()->update([
                'remember_token' => bcrypt($request->username),
            ]);

            // return response()->json([
            //     'message' => 'Login Berhasil',
            //     'username' => Auth::user()->username,
            //     'token' => Auth::user()->remember_token
            // ]);
            return redirect()->route('movie');
        } else {
            // return response()->json([
            //     'message' => 'username atau password salah!'
            // ], 401);
            return redirect()->back()->with('message', 'Invalid field');

        }
    }

    public function logout(Request $request)
    {
        $token = Auth::user()->remember_token;

        if (!empty($token)) {
            $user = User::where('remember_token', $token)->first();

            if ($user) {
                Auth::logout();

                $user->update([
                    'remember_token' => null
                ]);

                // return response()->json([
                //     'message' => 'logout berhasil!'
                // ], 200);
                return view('login');
            } else {
                return redirect()->back()->with('message', 'User tidak ada');
            }
        } else {
            // return response()->json([
            //     'message' => 'token tidak boleh kosong!'
            // ]);
            return redirect()->back()->with('message', 'token tidak boleh kosong!');
        }

    }

    public function changePassword(Request $request)
    {
        return view('change_password');
    }
    
    public function updatePassword(Request $request)
    {
        $auth = Auth::user();
    
        if ($auth) {
            $new_password = $request->new_password;
            $new_password_confirm = $request->new_password_confirmation;

            if ($new_password == $new_password_confirm) {
                $auth->update([
                    'password' => Hash::make($new_password)
                ]);
                
                return redirect()->route('movie');
            } else {
                return redirect()->back()->with('message', 'password harus sama!');
            }
        } else {
            return redirect()->back()->with('message', 'token tidak boleh kosong!');
        }
    }
}
