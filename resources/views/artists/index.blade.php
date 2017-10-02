@extends('layout')


    @section('content')

        <h1>Browse artists:</h1>

        <ul>
            @foreach($artists as $artist)

                <a href="/artists/{{ $artist->id }}">

                    <li>{{$artist->artistname}}</li>

                </a>

                <img src="{{$artist->artistimage}}">

            @endforeach
        </ul>


    @endsection