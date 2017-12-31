@extends('layouts.admin')

@section('content-header')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Questions</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Questions</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <h3>Add a new question</h3>
            </div>
            <div class="col-md-4">
                <a type="button" class="btn btn-primary" href="{{url('/questions/create')}}">
                    <i class="fa fa-btn fa-plus"></i> Add Question
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($questions as $question)
                    <div class="col-md-1">{{ $question->id }}</div>
                    <div class="col-md-3">{{$question->question}}</div>
                    <div class="col-md-2">{{$question->choice_one}}</div>
                    <div class="col-md-2">{{$question->choice_two}}</div>
                    <div class="col-md-2">{{$question->choice_three}}</div>
                    <div class="col-md-2">{{$question->choice_four}}</div>
                @endforeach
            </div>

        </div>


    </section>

@endsection