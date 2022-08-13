@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h2>Facultades</h2>
        </li>
        <li class="list-group-item">
            <div class="card-body col-6">
                <form method="POST" action="{{ route('faculties.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Nombre de la facultad</span>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-6 ">
                            <button type="submit" class="btn btn-success ">
                                {{ __('Registrar Nueva facultad') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </li>
    </ul>
    <br>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>Facultad</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($faculties as $faculty)
            <tr>
                <td>{{$faculty->id}}</td>
                <td>{{$faculty->name}}</td>
                <td>
                    <a href="#" type="submit" class="btn btn-info ">Editar</a>
                    <a href="#" type="submit" class="btn btn-danger ">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$users->links()}}
</div>--}}
</div>
@endsection