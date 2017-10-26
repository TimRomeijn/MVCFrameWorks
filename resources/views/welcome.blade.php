@extends('layout')


    @section('content')

        <h2>New Work</h2>

        <p> The latest works by our artists </p>

        @foreach($works as $work)
            @include('partials.work')
        @endforeach

    @endsection

    @section('footer')

    @endsection





