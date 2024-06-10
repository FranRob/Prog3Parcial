<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center text-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Detalles del alumno
            </h2>
            <div class="ml-auto">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Volver</a>
            </div>
        </div>
    </x-slot>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="row">
                    <label for="dni" class="col-md-5 col-form-label text-md-end text-start"><strong>DNI:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->dni }}
                    </div>
                </div>

                <div class="row">
                    <label for="name" class="col-md-5 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->name }}
                    </div>
                </div>

                <div class="row">
                    <label for="last_name" class="col-md-5 col-form-label text-md-end text-start"><strong>Apellido:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->last_name }}
                    </div>
                </div>

                <div class="row">
                    <label for="birthday" class="col-md-5 col-form-label text-md-end text-start"><strong>Fecha de nacimiento:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->birthday }}
                    </div>
                </div>

                <div class="row">
                    <label for="cluster" class="col-md-5 col-form-label text-md-end text-start"><strong>Grupo:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->cluster }}
                    </div>
                </div>

                <div class="row">
                    <label for="year" class="col-md-5 col-form-label text-md-end text-start"><strong>Año:</strong></label>
                    <div class="col-md-5" style="line-height: 35px;">
                        {{ $student->year }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>