<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function login(Request $r)
    {

        $user = User::where('email', $r->email)->first();
        if ($user && Hash::check($r->password, $user->password)) {
            $token = self::quickRandom(10);
            $user->token = $token;
            $user->save();

            return response()->json([
                'success' => true,
                'return_token' => $token
            ]);

        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email or password did not match'
            ]);
        }
    }
}
