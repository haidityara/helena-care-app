<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Orphanage;
use App\Model\User;
use Illuminate\Http\Request;

class OrphanageController extends Controller
{
    public function index()
    {
        $orphanages = Orphanage::orderBy('name', 'asc')->paginate('15');
        $user_orphanage = User::where('role', 'orphanage')->get();
        return view('admin.orphanages.index', compact('user_orphanage','orphanages'));
    }

    // function store orphanage
    public function store(Request $request)
    {
        $orphanage = new Orphanage();
        $orphanage->name = $request->name;
        $orphanage->owner_name = $request->owner_name;
        $orphanage->city = $request->city;
        $orphanage->province = $request->province;
        $orphanage->address = $request->address;
        $orphanage->user_id = $request->orphanage;
        $orphanage->save();
        return redirect()->to('admin/orphanages')->with('success', 'new orphanage added');
    }
}
