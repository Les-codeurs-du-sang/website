<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
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

        return redirect()->route('admin.promotion.index');
    }
}
