@extends('layout')


@section('content')

    <div class="col-sm-8">

        <h1>Detail Work:</h1>

        <img src="{{$work->workimage}}">

        <br></br>

        <p>{{$work->worktext}}</p>

        <hr>

        <div class="ratings">

            @foreach($work->ratings as $rating)

                <h2>Rating:</h2>

                <p>{{ $rating->rating }}</p>

            @endforeach

        </div>

        <hr>
        {{--Add a rating--}}


        <div class="card">

            <div class="card-block">

                <form method="POST" action="/works/{{ $work->id }}/ratings">

                    {{ csrf_field() }}

                    <div class="formgroup">
                        <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>


                    <div class="formgroup">
                        <button type="submit" class="btn btn-primary">Rate</button>
                    </div>

                </form>

            </div>
        </div>

    </div>



@endsection