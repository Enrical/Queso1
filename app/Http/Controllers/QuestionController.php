<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() 
    {
        $request = request();
        
        $name = $request->input('name');

        dd($request);

        $view = view("questions/index");
        return $view;
    }

    public function show($id) {
        $view = view('questions/show');
        return $view;
        return view(['id' => $id]);
    }
    
  

}