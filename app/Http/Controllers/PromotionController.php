<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $promotions = Promotion::all();
        return view('admin.promotion.index', compact('promotions'));
    }

    public function create() {
        $promotion = new Promotion();
        return view('admin.promotion.create', compact('promotion'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'titre' => 'required|unique:promotions,titre',
        ]);

        Promotion::create([
            'titre' => $request->titre,
        ]);

        return redirect()->route('admin.promotion.index')->with('success', 'La promotion à correctement été ajouté !');
    }

    public function edit(Promotion $promotion)
    {
        return view('admin.promotion.edit', compact('promotion'));
    }

    public function update(Promotion $promotion, Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|unique:promotions,titre',
        ]);

        $promotion->update($data);

        return redirect()->route('admin.promotion.index')->with('success', 'La promotion à correctement été modifié !');
    }
}
