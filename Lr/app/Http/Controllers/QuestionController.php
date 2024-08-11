<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;


class QuestionController extends Controller
{
    
    public function index()
    {
        $questions = Question::with('user')->latest()->simplePaginate(15);
        return view('questions.index', [
            'questions'=> $questions
        ]);
    }
    public function create()
    {
        return view('questions.create');
    }
    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'answer' => ['required']
        ]);

        Question::create([
            'title' => request('title'),
            'answer' => request('answer'),
            'user_id' => 1
        ]);

        return redirect('/questions');
    }
    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
    }
    public function update(Question $question)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'answer' => ['required']
        ]);

        $question->update([
            'title' => request('title'),
            'answer' => request('answer'),
        ]);
        return redirect('/questions/'. $question->id);
    }
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/questions');
    }


}
