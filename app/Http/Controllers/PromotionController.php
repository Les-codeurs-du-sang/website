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
}
