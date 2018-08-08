@extends('layouts/master')
@section('title')
    Greeting Result
@endsection

@section('content')
        Hello {{$name}}. Next year. you will be {{$age + 1}} years old.   
        <hr> 
@endsection