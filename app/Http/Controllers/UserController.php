<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }
}
