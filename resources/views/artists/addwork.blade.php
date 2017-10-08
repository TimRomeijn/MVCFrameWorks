@extends('layout')

@section('content')

    <h1>Hello wonderful artist!</h1>

    <p>Add your work for your artistprofile here!</p>

    <hr>

    <form method="post" action="/artists">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="imageInputFile">Upload images for your profile here</label>
            <input type="file" id="imageInputFile" name="artistimage">
            <p class="help-block">Additional text will be added down below.</p>
        </div>

        <div class="form-group">
            <label for="imageInputName"><b>Imagetext</b></label>
            <input type="text" class="form-control" id="imageInputName" placeholder="Info about image here..." name="artisttext">
        </div>

        {{--<div class="checkbox">--}}
            {{--<label>--}}
                {{--<input type="checkbox"> Check me out--}}
            {{--</label>--}}
        {{--</div>--}}

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection