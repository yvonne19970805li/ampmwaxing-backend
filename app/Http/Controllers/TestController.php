<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function Test() {
        return response()->json(['message' => 'Test from TestController']);
    }
}
