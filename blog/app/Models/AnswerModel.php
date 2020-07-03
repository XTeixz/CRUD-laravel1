<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel {
    public static function get_all(){
        $answers = DB::table("jawaban")->get();
        return $answers;
    }

    public static function save($data) {
        $new_answer = DB::$table("jawaban")->insert($data);
        return $new_answer;
    }
}