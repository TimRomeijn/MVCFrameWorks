@extends('layout')


    @section('content')

        <h1>Browse artists:</h1>


        <div class="artist-list">
            @foreach($artists as $artist)

                <a href="/artists/{{ $artist->id }}">

                    <p>{{$artist->name}}</p>

                </a>

            @endforeach
        </div>




    @endsection