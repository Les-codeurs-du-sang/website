<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index() {
        return view('blood.home');
    }

    public function create() {
        return view('blood.create');
    }
}
