@extends('layouts.app')
@section('content')

    <div class="container">
        <br>
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h2>Tipos de basurero</h2></li>
            <li class="list-group-item">
            <div class="card-body col-6">
                <form method="POST" action="{{ route('dumptypes.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Nombre del tipo de basurero</span>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Dimension</span>
                        <div class="col-md-6">
                            <input id="dimension" type="text" class="form-control @error('dimension') is-invalid @enderror" name="dimension" value="{{ old('dimension') }}" autofocus>

                            @error('dimension')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Material</span>
                        <div class="col-md-6">
                            <input id="materia" type="materia" class="form-control @error('materia') is-invalid @enderror" name="materia" value="{{ old('materia') }}" autofocus>

                            @error('materia')
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
                                {{ __('Registrar Nuevo Basurero') }}
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
            <th>Nombre</th>
            <th>Dimension</th>
            <th>Material</th>
            <th>Opciones</th>
            </thead>
            <tbody>
            @foreach ($dumptypes as $dump)
                <tr>
                    <td>{{$dump->id}}</td>
                    <td>{{$dump->name}}</td>
                    <td>{{$dump->dimension. " cm^3"}}</td>
                    <td>{{$dump->materia}}</td>
                    <td>
                    <a href="#" type="submit" class="btn btn-info ">Editar</a>
                    <a href="#" type="submit" class="btn btn-danger ">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        <div class="table table-striped">{{$users->links()}}</div>--}}
    </div>
@endsection
