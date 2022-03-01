<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoneMarrowController extends Controller
{
    public function home()
    {
        return view('bone_marrow.home');
    }
}
