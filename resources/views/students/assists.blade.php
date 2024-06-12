<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __("Asistencias de: $student->name $student->last_name ") }}
        </h2>
    </x-slot>

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
    
            <div class="card">
                <div class="card-body">
    
                        <div class="row text-center">
                                @forelse ($assists as $assist)
                                    <li class="list-group-item">{{date_format ($assist->created_at, "d/m/Y")}}</li>
                                @empty
                                <span class="text-danger">
                                    <strong>Nunca vino a clase</strong>
                                </span>
                                @endforelse

                        </div>
            
                </div>
            </div>

        </div>    
    </div>

</x-app-layout>


