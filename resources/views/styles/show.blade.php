@extends('layout')


@section('content')

    <div class="col-sm-8">

        <h1>All works from style: {{ $style->stylename }}</h1>

        <hr>

        @foreach($works as $work)
            @include('partials.work')
        @endforeach

    </div>



@endsection