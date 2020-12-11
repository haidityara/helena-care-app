<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\CategoryAdoption;
use Illuminate\Http\Request;

class CategoryAdoptionController extends Controller
{
    public function index(){
        $data = CategoryAdoption::orderBy('name','asc')->get();
        return response()->json($data);
    }
}
