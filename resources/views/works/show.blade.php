@extends('layout')


@section('content')

    <h1>Detail Artist:</h1>

    {{--<h2>{{$artist->artistname}}</h2>--}}

    <img src="{{$work->workimage}}">

    <br></br>

    <p>{{$work->worktext}}</p>


@endsection