<?php

namespace App\Http\Controllers;

use App\Models\Journee;
use App\Models\Question;
use App\Models\User;
use Error;
use Exception;
use Illuminate\Support\Facades\Validator;
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

    public function subscribe(){
        $lesJournees = Journee::all();
        return view('registerGift', compact('lesJournees'));
    }

    public function registerBlood(Request $request){
        $validator = Validator::make($request->all(), [
            'journeeChoisie' => 'required',
            'idUser' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try
        {
            $user = User::find($request->input("idUser"));
            $journee = Journee::find($request->input("journeeChoisie"));
            $user->journees()->attach($journee);
            $user->save();
        }
        catch(Exception $error)
        {
            session()->flash("unsucces", "Utilisateur incorrect");
            return redirect()->route("blood.home");
        }
        session()->flash("succes", "Vous avez bien été inscrit à la journée !");
        return redirect()->route("blood.home");



    }
}
