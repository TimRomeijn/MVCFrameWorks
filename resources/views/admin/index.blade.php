@extends('layout')


@section('content')

    <div class="col-sm-8">

        <h1>Hello Admin</h1>

        <h2>All users</h2>


            <table style="width:100%">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Change Role</th>
                    </tr>
                @foreach($users as $user)
                    <tr>
                        <form action="/admin" role="form" method="post">
                            {{ csrf_field() }}
                            <td>{{ $user->id }}</td>
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td><input type="checkbox"  data-toggle="toggle" name="user_role"></td>
                            <td><button type="submit" class="btn btn-primary">Submit Change</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>


    </div>


@endsection