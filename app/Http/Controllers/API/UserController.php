<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $user_find = User::where('email', $request->email)->first();
        if ($user_find != null) {
            return response()->json([
                'success' => 'false',
                'message'=> 'Email already used',
            ]);
        }

        // validator
        if (empty($request->full_name) || empty($request->email) || empty($request->password)) {
            return response()->json([
                'success' => 'false',
                'message' => 'Error Field required to fill'
            ]);
        }

        $user = new User();
        $user->role = 'client';
        $user->full_name = $request->full_name;
        $user->email = $request->email;


        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'success' => 'true',
            'message' => 'User successfully created '
        ]);
    }


}
