<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;

use App\Model\Property;

class PropertyController extends Controller
{
    public function index()
    {
      return view('property');
    }

    public function all()
    {
        $property = Property::all();
        return response()->json(['data' => $property]);
    }

    public function search($action, $key1, $key2=null){
        $property = Property::$action($key1,$key2)->get();
        return response()->json(['data' => $property]);
    }
}
