@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h2>Basureros</h2>
        </li>
        <li class="list-group-item">
            <div class="card-body col-6">
                <form method="POST" action="{{ route('dumps.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Nombre del basurero</span>
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
                        <span>Latitud</span>
                        <div class="col-md-6">
                            <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') }}" autofocus>

                            @error('lat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label> -->
                        <span>Longitud</span>
                        <div class="col-md-6">
                            <input id="long" type="text" class="form-control @error('long') is-invalid @enderror" name="long" value="{{ old('long') }}" autofocus>

                            @error('long')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="dumptype_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de basurero') }}</label>
                        <div class="col-md-6">
                            <select name="dumptype_id" id="dumptype_id">
                                <option value="">--selecciona tu tipo de basurero--</option>
                                @foreach ($dumpTypes as $dumpType)
                                <option value="{{$dumpType->id}}">{{" -> ".$dumpType->name}}</option>
                                @endforeach
                            </select>
                            @error('dumptype_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faculty_id" class="col-md-4 col-form-label text-md-right">{{ __('Facultad') }}</label>
                        <div class="col-md-6">
                            <select name="faculty_id" id="faculty_id">
                                <option value="">--selecciona la facultad--</option>
                                @foreach ($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{" -> ".$faculty->name}}</option>
                                @endforeach
                            </select>
                            @error('faculty_id')
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
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Facultad</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($dumps as $dump)
            <tr>
                <td>{{$dump->id}}</td>
                <td>{{$dump->lat}}</td>
                <td>{{$dump->long}}</td>
                <td>{{$dump->name}}</td>
                <td>{{$dump->dumpType->name}}</td>
                <td>{{$dump->faculty->name}}</td>
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