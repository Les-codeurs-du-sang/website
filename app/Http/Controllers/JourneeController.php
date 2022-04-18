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
        $journee = new Journee();

        return view('admin.journee.create', compact('journee'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'heureDebut' => 'required',
            'heureFin' => 'required',
            'typeDon' => 'required|numeric|min:0|max:1',
        ]);

        $j = Journee::create($data);

        return redirect()->route('admin.journee.show', $j)->with('success', 'La journée à correctement été ajoutée !');
    }

    public function edit(Journee $journee)
    {
        return view('admin.journee.edit', compact('journee'));
    }

    public function update(Request $request, Journee $journee)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'heureDebut' => 'required',
            'heureFin' => 'required',
            'typeDon' => 'required|numeric|min:0|max:1',
        ]);

        $journee->update($data);

        return redirect()->route('admin.journee.show', $journee)->with('success', 'La journée à correctement été modifiée !');
    }
}
