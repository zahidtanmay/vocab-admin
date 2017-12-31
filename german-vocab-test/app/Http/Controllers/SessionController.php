<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public function index(Request $request){
        $data = $request->session()->all();
        return $data;
    }

    public function create(Request $request,$name, $score){
//        session(['vocab_test'=>'test started', 'current'=> 1, 'name'=>$name, 'score'=>$score]);
        $response = 'name : '.$name.', score : '.$score;
        $request->session()->put('vocab_test','test started');
        $request->session()->put('current','1');
        $request->session()->put('name',$name);
        $request->session()->put('score',$score);
        return session()->all();
    }


}
