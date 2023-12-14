<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function firstfunc()
    {
        $user = 'user1';
        return $user;
    }

    public function getsum()
    {
        $number1 = 4;
        $number2 = 5;
        $sum = $number1 + $number2;
        return $sum;
    }

    public function getsumtwo()
    {
        $no = '8';
        return $no;
    }

    public function getsumwithpayload(Request $request)
    {
        $data = $request->validate([
            'number1' => 'required',
            'number2' => 'required'
        ]);
        $number1 = $data['number1'];
        $number2 = $data['number2'];

        return  $number1 + $number2;
    }

    public function returnObject()
    {
        $objectFirst = [
            "key1" => "Darshana",
            "key2" => 33,
        ];
        return response()->json(['data' => $objectFirst]);
    }

    public function returnArray()
    {
        $arrayFirst = array("element1", "element2", "element3");



        return response()->json(['data' => $arrayFirst]);
    }

    public function secondArray()
    {
        $arraySecond = array(
            [
                "key1" => "ABC",
                "key2" => "YYY"
            ],
            [
                "key1" => "sss",
                "key2" => "eee"
            ]
        );

        $newArray = [
            'firstarray' => $arraySecond,
            'secondarray' => $arraySecond
        ];

        return response()->json(['data' => $arraySecond]);
    }

    public function returnCondidtion()
    {
        $number1 = 10;
        $number2 = 15;

        if ($number1 == $number2) {
            return response()->json(['data' => true]);
        } else {
            return response()->json(['data' => false]);
        }
    }

    public function returnLoop()
    {
        $arraytest = array();
        for ($i = 0; $i <= 10; $i++) {
            array_push($arraytest, 'value '.$i);
        }
    }
}
