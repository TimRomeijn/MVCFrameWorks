@extends('layout')


    @section('content')

        <h1>Browse artists:</h1>


        <div class="artist-list">
            <ul>


            @foreach($artists as $artist)

                <a href="/artists/{{ $artist->id }}">

                    <li>{{$artist->name}}</li>

                </a>

            @endforeach
            </ul>
        </div>




    @endsection