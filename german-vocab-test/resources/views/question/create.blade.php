@extends('layouts.admin')

@section('content-header')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Questions</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a new Question</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/questions') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                                <label for="question" class="col-md-4 control-label">Question</label>

                                <div class="col-md-6">
                                    <input id="question" type="text" class="form-control" name="question" value="{{ old('question') }}" required autofocus>

                                    @if ($errors->has('question'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('choice_one') ? ' has-error' : '' }}">
                                <label for="choice_one" class="col-md-4 control-label">choice_one</label>

                                <div class="col-md-6">
                                    <input id="choice_one" type="text" class="form-control" name="choice_one" value="{{ old('choice_one') }}" required autofocus>

                                    @if ($errors->has('choice_one'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('choice_one') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('choice_two') ? ' has-error' : '' }}">
                                <label for="choice_two" class="col-md-4 control-label">choice_two</label>

                                <div class="col-md-6">
                                    <input id="choice_two" type="text" class="form-control" name="choice_two" value="{{ old('choice_two') }}" required autofocus>

                                    @if ($errors->has('choice_two'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('choice_two') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('choice_three') ? ' has-error' : '' }}">
                                <label for="choice_three" class="col-md-4 control-label">choice_three</label>

                                <div class="col-md-6">
                                    <input id="choice_three" type="text" class="form-control" name="choice_three" value="{{ old('choice_three') }}" required autofocus>

                                    @if ($errors->has('choice_three'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('choice_three') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('choice_four') ? ' has-error' : '' }}">
                                <label for="choice_four" class="col-md-4 control-label">choice_four</label>

                                <div class="col-md-6">
                                    <input id="choice_four" type="text" class="form-control" name="choice_four" value="{{ old('choice_four') }}" required autofocus>

                                    @if ($errors->has('choice_four'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('choice_four') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('answer_one') ? ' has-error' : '' }}">
                                <label for="answer_one" class="col-md-4 control-label">answer_one</label>

                                <div class="col-md-6">
                                    <input id="answer_one" type="text" class="form-control" name="answer_one" value="{{ old('answer_one') }}" required autofocus>

                                    @if ($errors->has('answer_one'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('answer_one') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('answer_two') ? ' has-error' : '' }}">
                                <label for="answer_two" class="col-md-4 control-label">answer_two</label>

                                <div class="col-md-6">
                                    <input id="answer_two" type="text" class="form-control" name="answer_two" value="{{ old('answer_two') }}" required autofocus>

                                    @if ($errors->has('answer_two'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('answer_two') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('question_type') ? ' has-error' : '' }}">
                                <label for="question_type" class="col-md-4 control-label">question_type</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="question_type" name="question_type">
                                        @foreach($question_type as $option )
                                            <option value="{{ $option->id }}">{{$option->question_type}}</option>
                                            @endforeach
                                    </select>

                                    @if ($errors->has('question_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('question_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
