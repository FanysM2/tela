<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Answer;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        $question = Question::create($request->only(['text', 'type']));

        if ($request->type == 'multiple') {
            foreach ($request->answers as $answer) {
                Answer::create(['question_id' => $question->id, 'text' => $answer]);
            }
        }

        return redirect()->route('questions.index')->with('success', 'Pregunta creada con éxito.');
    }

    public function answer($id)
    {
        $question = Question::with('answers')->findOrFail($id);
        return view('questions.answer', compact('question'));
    }

    public function storeAnswer(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_text' => 'nullable|string',
            'answer_id' => 'nullable|exists:answers,id',
        ]);

        UserAnswer::create($request->only(['question_id', 'answer_text', 'answer_id']));

        return redirect()->route('questions.index')->with('success', 'Respuesta guardada con éxito.');
    }
}
