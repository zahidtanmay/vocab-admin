<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_questions = Question::all()->count();
        $total_test_taken = Test::all()->count();
        return view('admin/index', ['total_questions'=> $total_questions, 'total_test_taken'=>$total_test_taken]);
    }
}
