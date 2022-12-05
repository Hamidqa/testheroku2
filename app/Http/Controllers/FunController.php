<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunController extends Controller
{
    public function show() {
        return view('test.blade.php');
    }
}
