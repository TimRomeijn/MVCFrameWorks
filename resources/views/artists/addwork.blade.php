@extends('layout')

@section('content')

    <h1>Hello artist: {{Auth::user()->name}}!</h1>

    <p>Your current work:</p>

    {{--Add work from artist here with loop--}}

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
                <option value="Traditional">Traditional</option>
                <option value="Japanese">Japanese</option>
                <option value="Realism">Realism</option>
                <option value="">NewSchool</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection