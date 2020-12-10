<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('admin.layout');
    }

    public function index()
    {
        $users = User::orderBy('id','desc')->paginate('15');
        return view('admin.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $user_find = User::where('email', $request->email)->first();
        if ($user_find != null) {
            return redirect()->to('admin/users')->with('error','Email already registered');
        }
        $user = new User();
        $user->role = $request->role;
        $user->full_name = $request->fullName;
        $user->email = $request->email;

        if ($request->phone) {
            $user->phone = $request->phone;
        }
        if ($request->city) {
            $user->city = $request->city;
        }
        if ($request->address) {
            $user->address = $request->address;
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->to('admin/users')->with('success','User successfully created');
    }
}
