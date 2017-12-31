@extends('layouts.admin')

@section('content-header')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Taken Test Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tests</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                @foreach ($test_data as $test)
                    <div class="col-md-1">{{ $test->id }}</div>
                    <div class="col-md-3">{{$test->name}}</div>
                    <div class="col-md-2">{{$test->first_name}}</div>
                    <div class="col-md-2">{{$test->result_points}}</div>
                    <div class="col-md-2">{{$test->created_at}}</div>
                    <div class="col-md-2">...</div>
                @endforeach
            </div>

        </div>


    </section>

@endsection