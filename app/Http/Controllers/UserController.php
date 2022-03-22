<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        $promotions = Promotion::all();
        return view('admin.users.create', compact('promotions'));
    }

    public function edit(Request $request) {
        return view();
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|unique:users,name',
            'promotion' => 'required|exists:promotions,id',
            'mail' => 'required|email',
            'password' => 'required|password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->mail,
            'promotion_id' => $request->promotion,
            'password' => Hash::make($request->password),
            'dateDernierDon' => null,
        ]);

        return redirect()->route('admin.users.index');
    }

}
