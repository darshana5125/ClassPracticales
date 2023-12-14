<?php

namespace App\Http\Controllers;

use App\Models\Test2;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request){
        $data = $request -> validate(
            [
                'number1' => 'required|integer',
                'number2' => 'required|integer',
                'text' =>'required'
            ]
            );

            $createddata = Test2::create($data);
            return response()->json(['data' =>$createddata]);
    }

    public function index(){
        $alltestdata = Test2::all();
        return response()->json(['data' => $alltestdata]);
    }

}
