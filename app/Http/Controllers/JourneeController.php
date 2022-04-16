<?php

namespace App\Http\Controllers;

use App\Models\Journee;
use App\Models\User;
use Illuminate\Http\Request;

class JourneeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $journees = Journee::all();

        return view('admin.journee.index', compact('journees'));
    }

    public function show(Journee $journee)
    {
        return view('admin.journee.show', compact('journee'));
    }

    public function create()
    {
        return view('admin.journee.create',);
    }

    public function store(Request $request)
    {
       // $request->va
    }
}
