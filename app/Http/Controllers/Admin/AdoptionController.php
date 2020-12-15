<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Adoption;
use App\Model\CategoryAdoption;
use App\Model\Orphanage;
use App\Model\User;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function index()
    {
        $categories = CategoryAdoption::all();
        $orphanages = Orphanage::all();
        $users = User::all();
        $adoptions = Adoption::orderBy('created_at', 'desc')->paginate('15');
        return view('admin.adoption.index', compact('categories', 'users', 'orphanages', 'adoptions'));
    }

    public function store(Request $request)
    {
        $adoption = new Adoption();
        $adoption->category_id = $request->category;
        $adoption->name = $request->name;
        $adoption->sex = $request->gender;
        $adoption->description = $request->description;
        $adoption->birthday = $request->birth_day;
        $adoption->orphanage_id = $request->orphanage;
        $adoption->user_id = $request->user;
        $adoption->city = $request->city;
        $adoption->province = $request->province;
        $adoption->address = $request->address;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fullName = $image->getClientOriginalName();
            $n = explode('.', $fullName)[0];
            $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/adoptions');
            $image->move($destinationPath, $name);
            $adoption->image = $name;
        }
        $adoption->save();
        return redirect()->to('admin/adoptions')->with('success', 'Adoption posted');
    }

    public function delete($id){
        $data = Adoption::find($id);
        $data->delete();
        return redirect()->to('admin/adoptions')->with('success', 'Adoption deleted');
    }
}
