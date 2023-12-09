<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
    public function firstfunc(){
          $user = 'user1';
          return $user;
     }

    public function getsum(){
        $number1=4;
        $number2=5;
        $sum=$number1+$number2;
        return $sum;
    }

    public function getsumtwo(){
        $no='8';
        return $no;
    }

    public function getsumwithpayload(Request $request){
        $data = $request->validate([
            'number1' => 'required',
            'number2' => 'required'
        ]);
        $number1=$data['number1'];
        $number2=$data['number2'];
       
        return  $number1+$number2;
    }
}
