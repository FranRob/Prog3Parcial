<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Todos los alumnos') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center mt-3 ">
    <div class="col-md-12 ">

        @if ($message = Session::get('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card container border">
            <div class="card-body">
                <a href="{{ route('students.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Agregar un nuevo estudiante</a>
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Año</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($students as $student)
                        <tr>
                            <input type="integer" class="d-none hidden" name="{{$student->id}}">
                            <td>{{$student->dni}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->birthday}}</td>
                            <td>{{$student->year}}</td>
                            <td>{{$student->cluster}}</td>
                            <td>
                                <form action="{{route('students.destroy',$student->id)}}" method="post" class="d-flex justify-content-evenly">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('students.show',$student->id)}}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i>Ver</a>

                                    <a href="{{route('students.edit', $student->id)}}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro que quieres eliminar?');"><i class="bi bi-trash"></i>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No se encontraron alumnos en el listado</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>    
</div>

    
</x-app-layout>

