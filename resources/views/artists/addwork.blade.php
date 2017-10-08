@extends('layout')

@section('content')

    <h1>Hello wonderful artist!</h1>

    <p>Add your work for your artistprofile here!</p>

    <hr>

    <form>

        <div class="form-group">
            <label for="exampleInputFile">Upload images for your profile here</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Additional text will be added down below.</p>
        </div>

        <div class="form-group">
            <label for="exampleInputName2"><b>Imagetext</b></label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="Info about image here...">
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection