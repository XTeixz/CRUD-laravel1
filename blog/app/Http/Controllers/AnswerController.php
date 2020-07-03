<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function index(){
        $answer = AnswerModel::get_all();
        return view('answer.index', compact('answers'));
    }
}
