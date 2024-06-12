<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Busca a un alumno por su DNI
            </h2>
            <div class="ml-auto">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Volver</a>
            </div>
        </div>
    </x-slot>

    <div class="row justify-content-center mt-3">
            <div class="card w-25">
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <form action="{{route('assist.mostrar')}}" method="post"></form>
                        @csrf
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="student_dni" id="student_dni">
                                <label for="student_dni">DNI:</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</x-app-layout>
