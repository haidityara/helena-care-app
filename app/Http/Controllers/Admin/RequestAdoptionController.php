<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\RequestAdoption;
use Illuminate\Http\Request;

class RequestAdoptionController extends Controller
{
    public function index()
    {
        $requests = RequestAdoption::orderBy('id', 'desc')->get();
        return view('admin.request.index', compact('requests'));
    }
}
