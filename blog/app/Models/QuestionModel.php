<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel {
    public static function get_all(){
        $questions = DB::table("pertanyaan")->get();
        return $questions;
    }

    public static function save($data) {
        $new_question = DB::table("pertanyaan")->insert($data);
        return $new_question;
    }
}