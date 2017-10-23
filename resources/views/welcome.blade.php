@extends('layout')


    @section('content')

        <h2>Popular artists</h2>

        <p> Three featured works </p>

        {{--loop for high rated artists here--}}

        @foreach($works as $work)
            @include('partials.work')
        @endforeach

    @endsection

    @section('footer')

    @endsection





