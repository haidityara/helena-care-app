<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\CategoryAdoption;
use Illuminate\Http\Request;

class CategoryAdoptionController extends Controller
{
    public function index()
    {
        $categories = CategoryAdoption::orderBy('id','desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new CategoryAdoption();

        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fullName = $image->getClientOriginalName();
            $n = explode('.', $fullName)[0];
            $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/categories');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }
        $category->save();
        return redirect()->to('admin/categories-adoption')->with('success', 'Success add new category adoption');
    }
}
