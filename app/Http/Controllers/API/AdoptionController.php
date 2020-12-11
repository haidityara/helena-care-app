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

    public function byCategory($category_id)
    {
        $dataAdopt = Adoption::where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        if (count($dataAdopt) == 0) {
            return response()->json([
                'success' => true,
                'message' => "Empty data"
            ]);
        }
        return response()->json($dataAdopt);
    }

    public function getOne($id)
    {
        $dataAdopt = Adoption::where('id', $id)->first();
        if (empty($dataAdopt)) {
            return response()->json([
                'success' => true,
                'message' => "Empty data"
            ]);
        }
        $data = [
            "id" => $dataAdopt->id,
            "category_id" => $dataAdopt->category_id,
            "name" => $dataAdopt->name,
            "birthday" => $dataAdopt->birthday,
            "sex" => $dataAdopt->sex,
            "description" => $dataAdopt->description,
            "image" => $dataAdopt->image,
            "orphanage_id" => $dataAdopt->orphanage_id,
            "user_id" => $dataAdopt->user_id,
            "city" => $dataAdopt->city,
            "province" => $dataAdopt->province,
            "address" => $dataAdopt->address,
            "lat" => $dataAdopt->lat,
            "long" => $dataAdopt->long,
            "created_at" => $dataAdopt->created_at,
            "updated_at" => $dataAdopt->updated_at,
            "getOrphanage" => $dataAdopt->getOrphanage->name,
        ];
        return response()->json($dataAdopt);
    }
}
