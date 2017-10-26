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
                        <th>Change to User</th>
                        <th>Change to Artist</th>
                    </tr>
                @foreach($users as $user)
                    <tr>
                        <form action="/admin" method="post">
                            {{ csrf_field() }}
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td><input type="checkbox" name="user_role" {{ $user->where('role', '=', 1) ? 'checked' : ''}}></td>
                            <td><input type="checkbox" name="artist_role" {{ $user->where('role', '=', 2) ? 'checked' : ''}}></td>
                            <td><button type="submit" class="btn btn-primary">Submit Change</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>


    </div>


@endsection