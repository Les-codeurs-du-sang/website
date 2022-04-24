<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $users = User::paginate(15);
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        $promotions = Promotion::all();
        $user = new User();
        return view('admin.users.create', compact('promotions', 'user'));
    }

    public function edit(User $user) {
        $promotions = Promotion::all();
        return view('admin.users.edit', compact('user', 'promotions'));
    }

    public function update(User $user, Request $request) {
        $data = $request->validate([
            'name' => 'required|unique:users,name',
            'promotion' => 'required|exists:promotions,id',
            'mail' => 'required|email',
        ]);

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'L\'utilisateur à correctement été modifié !');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|unique:users,name',
            'promotion' => 'required|exists:promotions,id',
            'mail' => 'required|email|unique:users,email',
            'password' => 'required|password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->mail,
            'promotion_id' => $request->promotion,
            'password' => Hash::make($request->password),
            'dateDernierDon' => null,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'L\'utilisateur à correctement été ajouté !');
    }

    public function import(Request $request)
    {
        return view('admin.users.import');
    }

    public function saveCsv(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        $csvFile = $request->file('file'); // On recupere le CSV
        $reader = Reader::createFromPath($csvFile, 'r'); // On initialise le reader
        $reader->setDelimiter(';'); // On définis le séparateur sur ';'
        $reader->setHeaderOffset(0); // On définis le header de CSV (nom, prenom, etc ...)
        $records = $reader->getRecords(); // On récupere les données

        $data = [];
        foreach ($records as $offset => $record) { // On stocke les données du fichier CSV dans un tableau
           array_push($data, $record);
        }

        foreach ($data as $item) { // On parcours tout le tableau

            $tempPromo = Promotion::where('titre', "=", $item['classe'])->first(); // On récupere la promotion du associée a l'utilisateur

            if ($tempPromo == null) { // Si il n'y a pas de promotion
                $promotion = Promotion::create([ // On en crée une
                    'titre' => $item['classe'],
                ]);
            } else {
                $promotion = $tempPromo; // Sinon on utilise la promotion existante
            }

            // On crée le User
            User::create([
                'name' => $item['prenom'],
                'lastname' => $item['nom'],
                'pseudo' => $item['pseudo'],
                'email' => $item['mail'],
                'password' => Hash::make($item['mdp']),
                'promotion_id' => $promotion->id,
            ]);
        }

        return redirect()->route('admin.users.index')->with('success', 'Le fichier a été importer avec succès !');
    }
}
