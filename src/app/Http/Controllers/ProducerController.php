<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function index(Request $request)
    {
        return view('producer.index');
    }
}
