<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    public function index(){
        $test_data = Test::all();
        return view('test/index', ['test_data'=> $test_data]);
    }

    public function store(Request $request){
        Test::create([
            'name' => request('name'),
            'first_name' => request('first_name'),
            'result_points' => request('result_points')
        ]);
        return 'created successfully';

    }
}
