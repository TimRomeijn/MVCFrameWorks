@extends('layout')

@section('content')

    <h1>Hello artist: {{Auth::user()->name}}!</h1>

    <p>Your current work:</p>

    @foreach($works as $work)
        @include('partials.work')
    @endforeach


    <hr>

    <p>Add your work for your artistprofile here!</p>

    <hr>

    <form method="post" action="/artists/addwork">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="imageInputName"><b>WorkImageURL</b></label>
            <input type="text" class="form-control" id="imageInputName" placeholder="ImageURL here" name="workimage" required>
        </div>

        <div class="form-group">
            <label for="imageInputName"><b>WorkImagetext</b></label>
            <input type="text" class="form-control" id="imageInputName" placeholder="Info about image here..." name="worktext" required>
        </div>

        <div class="stylelist">
            <label for="imageInputName"> <b>WorkStyle</b></label>
            <select name="stylename">
                @foreach($styles as $style)
                    <option value="{{ $style->style_id }}">{{ $style->stylename }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection