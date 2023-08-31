<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        $quizzes = Quiz::where('status','active')->withCount('questions')->paginate(5);
        return view('dashboard', compact('quizzes'));
    }

    public function quiz_detail($slug){

        $quiz= Quiz::whereSlug($slug)->withCount('questions')->first()?? abort(404, 'Quiz not found.');
        return view('quiz_detail', compact('quiz'));
    }
}
