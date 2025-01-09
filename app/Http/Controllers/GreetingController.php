<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    function hello(){
        return 'Hellp from GreetingController!';
    }

    function greet($name){
        return "Greetings, $name !";
    }

    function farewell($name = 'Guest'){
        // return "Goodbye, $name ";  message->可自定義 key
        // return response()->json(['message' => "Goodbye, $name "]);
        $pkg = ["aa", 11];
        $more = ["key" => ["k1", "k2", $pkg]];
        return response()->json(['message' => $more]);

    }
}