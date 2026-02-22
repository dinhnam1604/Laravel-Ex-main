<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return view('age');
    }

    public function save(Request $request)
    {
        session(['age' => $request->age]);
        return "Đã lưu tuổi vào session";
    }
}