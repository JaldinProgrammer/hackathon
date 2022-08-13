@extends('layouts.app')
@section('content')

    <div class="container">
        <br>
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h2>usuarios</h2></li>
        </ul>
        <br>
        <table class="table table-striped">
            <thead>
            <th>id</th>
            <th>Nombre</th>
            <th>email</th>
            <th>Cargo</th>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->jobPosition->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        <div class="table table-striped">{{$users->links()}}</div>--}}
    </div>
@endsection
