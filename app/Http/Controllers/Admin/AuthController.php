<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }

    public function login(Request $r)
    {

        $user = User::where('email', $r->email)->first();
        if ($user && Hash::check($r->password, $user->password)) {

            $me = array(
                'id' => $user->id,
                'role' => $user->role,
                'name' => $user->full_name,
                'email' => $user->email,
                'phone' => $user->phone
            );
            session(['admin' => $me]);
            return redirect()->to('admin');

        } else {
            return redirect()->to('admin/login')->with('error','Your email or password did not match');
        }
    }

    public function logout(){
        session()->forget('admin');
        return redirect('admin/login');
    }
}
