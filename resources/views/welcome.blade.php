@extends('layout')


    @section('content')

        <h2>Popular artists</h2>

        <p> Three featured artists </p>

        {{--loop for high rated artists here--}}

        {{--<ul>--}}
        {{--@foreach($artists as $artist)--}}

        {{--<li>{{$artist->artistname}}</li>--}}

        {{--<img src="{{$artist->artistimage}}">--}}

        {{--@endforeach--}}
        {{--</ul>--}}


    @endsection

    @section('footer')

    @endsection





