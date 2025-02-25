<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales.index');
    }
}
