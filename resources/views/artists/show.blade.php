@extends('layout')


@section('content')

    <h1>Detail Artist:</h1>

    <h2>{{$artist->artistname}}</h2>

    <img src="{{$artist->artistimage}}">


@endsection