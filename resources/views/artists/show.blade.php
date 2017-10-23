@extends('layout')


@section('content')

    {{dd('hello world')}}
    <h1>Detail Artist:</h1>

    <h2>{{$artist->artistname}}</h2>

    <img src="{{$artist->artistimage}}">

    <br></br>

    <p>{{$artist->artisttext}}</p>


@endsection