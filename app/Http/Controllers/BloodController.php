<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index() {
        $questions = Question::all();
        return view('blood.home', compact('questions'));
    }

    public function create() {
        return view('blood.create');
    }
}
