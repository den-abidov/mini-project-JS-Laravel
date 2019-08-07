<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Часть 1
    public function test()
    {   
        return view('test')->with('age', 21);
    }

    // Часть 2
    public function getFromLaravel()
    {
        return "I am from Laravel.";
    }

    // Часть 3
    public function getAgeFromLaravel(Request $request)
    {

        $ageNow = $request->age;
        $ageThen = $ageNow + 1;
        $answer = "Laravel : Если тебе сейчас {$ageNow}, то в следующем году тебе будет {$ageThen}.";
        return $answer;
    }

     // Часть 4
     public function checkIfAgeLegal(Request $request)
     {
        //dd("Зашёл в TestController@checkIfAgeLegal");

        $ageNow = $request->age;

        $verdict = "рано";

        if($ageNow >= 21)
        {
           $verdict = "можно";
        }

        return $verdict;
     }
}
