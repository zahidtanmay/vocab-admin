<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Question_type;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('question/index', ['questions'=> $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question_type = Question_type::all();
        return view('question/create', ['question_type'=>$question_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'question' => 'required',
            'choice_one' => 'required',
            'choice_two' => 'required',
            'choice_three' => 'required',
            'choice_four' => 'required',
            'answer_one' => 'required',
            'answer_two' => 'required',
            'question_type' => 'required'
        ]);

        Question::create([
            'question' => request('question'),
            'choice_one' => request('choice_one'),
            'choice_two' => request('choice_two'),
            'choice_three' => request('choice_three'),
            'choice_four' => request('choice_four'),
            'answer_one' => request('answer_one'),
            'answer_two' => request('answer_two'),
            'question_type' => request('question_type')
        ]);
        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
