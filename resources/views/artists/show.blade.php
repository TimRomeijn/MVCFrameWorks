@extends('layout')


@section('content')

    <div class="col-sm-8">
        <h1>Details Artist:</h1>

        <h2>{{ $artist->name }}</h2>

        @foreach($works as $work)
            @include('partials.work')
        @endforeach

    </div>



@endsection