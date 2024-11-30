<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello, this is the response from MyController!'
        ]);
    }
}
