<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    //
    public function test(Request $request)
    {
        $name = $request->header();
        return response()->json($name);
    }
}