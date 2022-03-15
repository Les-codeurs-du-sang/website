<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only('create');
    }
    public function index() {
        $questions = Question::all();
        return view('blood.home', compact('questions'));
    }

    public function create() {
        return view('blood.create');
    }
}
