<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;

class QuestionController extends Controller
{
    public function index() 
    {
        $answer = Answer::where('question_id', $question_id)->get();
        $questions = Question::latest()->get();
        
        //prepare the view for the list of questions
        $view = view("questions/index");
        dd($result);
        
        //give the array of questions to the view
        $view->answer = $answer;
        $view->questions = $questions;
        return $view;
    }

    public function show($question_id) {

        $question = Question::find($question_id);

        $answers = $question->answers()->latest()->get();

        // $answer = Answer::where('question_id', $question_id )->get();
        $view->answer = $answers;

        // $question = Question::where('id', $question_id )->first();
        $view->question = $question;

        $view = view('questions/show');
        return $view;
        return view(['id' => $id]);
    }
    
  

}