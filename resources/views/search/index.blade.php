@extends('layout')


@section('content')

    <div class="col-sm-8">
        <h1>Search the platform!</h1>

        <form method="POST" action="/search">
            {{csrf_field()}}

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for artists or works.." name="searchfield">
                <span class="input-group-btn">
					<button class="btn btn-default" type="submit">Search</button>
				</span>
            </div>

            <hr>

            <div class="form-group">
                @if(isset($workSearches))
                    <h2>Works</h2>

                    @foreach($workSearches as $work)
                        <img class="workimage" src="{{ $work->workimage }}">

                        <a href="works/{{ $work->id }}">
                            <b>{{ $work->worktext }}</b>
                        </a>
                    @endforeach

                @endif

                @if(isset($userSearches))
                    <h2>Artists</h2>

                    <ul>
                        @foreach($userSearches as $artist)
                            <a href="/artists/{{ $artist->id }}">

                                <li>{{$artist->name}}</li>

                            </a>
                        @endforeach
                    </ul>

                @endif
            </div>
        </form>


    </div>




@endsection