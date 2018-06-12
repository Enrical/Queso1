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
    
        $result = Question::latest()->get();
        dd($result);

        $view = view("questions/index");
        // give the array of questions to the view
        $view->questions = $result;

        return $view;
    }

    public function show($question_id)
    {
        $question = Question::find($question_id);

        // Select from answers where id of question is the id os this
        // $answers = Answer::where('question_id', $question_id)->aldest()->get();
        $answer  = $question->answers;

        // SELECT * FROM `questions` WHERE `id` = {$question_id}
        $question = Question::where('id', $question_id)->first();

        // prepare the view for the list questions
        $view = view('questions/show');

         // give the array of questions to the view
        $view->answers = $answers;
        $view->question = $question;


        return $view;
        return view(['id' => $id]);
    }
}