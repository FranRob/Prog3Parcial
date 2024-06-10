<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar datos del alumno
            </h2>
            <div class="ml-auto">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Volver</a>
            </div>
        </div>
    </x-slot>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
           
            <div class="card-body">
                <form action="{{route('students.update', $student->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Dni</label>
                        <div class="col-md-6">
                          <input type="integer" class="form-control @error('dni') is-invalid @enderror" id="dni" name="dni" value="{{ $student->dni }}">
                            @if ($errors->has('dni'))
                                <span class="text-danger">{{ $errors->first('dni') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $student->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start">Apellido</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ $student->last_name }}">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-end text-start">Fecha de nacimiento</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ $student->birthday }}">
                            @if ($errors->has('birthday'))
                                <span class="text-danger">{{ $errors->first('birthday') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="cluster" class="col-md-4 col-form-label text-md-end text-start">Grupo</label>
                        <div class="col-md-6">
                          <input type="enum" step="0.01" class="form-control @error('cluster') is-invalid @enderror" id="cluster" name="cluster" value="{{ $student->cluster }}">
                            @if ($errors->has('cluster'))
                                <span class="text-danger">{{ $errors->first('cluster') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="cluster" class="col-md-4 col-form-label text-md-end text-start">Año:</label>
                        <div class="col-md-6">
                          <input type="integer" step="0.01" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ $student->year }}">
                            @if ($errors->has('year'))
                                <span class="text-danger">{{ $errors->first('year') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Editar alumno">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
</x-app-layout>   