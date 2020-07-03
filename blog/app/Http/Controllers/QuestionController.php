<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    //
    public function index(){
        $question = QuestionModel::get_all();
        dd($question);
        return view('question.index', compact('question'));
    }

    public function create(){
        return view('question.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data['_token']);
        $question = QuestionModel::save($data);
        if ($question){
            return view('question.index');
        }
    }
}
