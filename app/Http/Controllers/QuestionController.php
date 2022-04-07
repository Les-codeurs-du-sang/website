<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::all();
        return view('admin.question.index', compact('questions'));
    }

    public function show(Question $question)
    {
        return view('admin.question.show', compact('question'));
    }

    public function create()
    {
        $question = new Question();
        return view('admin.question.create', compact('question'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required',
            'reponse' => 'required|max:500',
        ]);

        $question = Question::create([
            'question' => $request->question,
            'reponse' => $request->reponse,
        ]);

        return redirect()->route('admin.question.show', $question->id)->with('success', 'La question à correctement été ajouté !');
    }

    public function edit(Question $question)
    {
        return view('admin.question.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $data = $request->validate([
            'question' => 'required',
            'reponse' => 'required|max:500',
        ]);

        $question->update($data);

        return redirect()->route('admin.question.show', $question->id)->with('success', 'La question à correctement été modifié !');
    }

    public function delete(Question $question)
    {
        $question->delete();

        return redirect()->route('admin.question.index')->with('success', 'La question à correctement été supprimé !');
    }
}
