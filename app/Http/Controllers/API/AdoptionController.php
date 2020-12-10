<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Adoption;
use App\Model\User;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{

    public function index()
    {


        $dataAdopt = Adoption::orderBy('created_at', 'desc')->get();
        return response()->json($dataAdopt);
    }
}
