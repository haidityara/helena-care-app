<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\RequestAdoption;
use Illuminate\Http\Request;

class RequestAdoptionController extends Controller
{
    public function store(Request $request)
    {
        // validate input
        if (empty($request->adoption_id) || empty($request->name) || empty($request->reason) || empty($request->phone) || empty($request->user_id)) {
            return response()->json([
                'success' => false,
                'message' => 'Some filed no filled'
            ]);
        }

        $data = new RequestAdoption();
        $data->name = $request->name;
        $data->reason = $request->reason;
        $data->phone = $request->phone;
        $data->user_id = $request->user_id;
        $data->save();
        // return success
        return response()->json([
            'success' => true,
            'message' => 'Success add request adoption'
        ]);
    }
}
