<?php

namespace App\Http\Controllers;

use App\Models\Assist;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AssistController extends Controller
{
    

    public function show(Request $request)
    {
        $dni = $request->student_dni;
        $student = Student::where('dni', $dni)->first();

        if (!$student){
            return redirect()->route('assist.search')->withErrors('El DNI: '.$dni.' no existe.');
        }
        
        return view('assists.show', compact('student'));
    }

    public function store(Request $request) 
    {
        $exist = Assist::where('student_id',$request->id)->latest()->first();

        if ($exist) {
           $lastAssist = $exist->created_at->format('Y-m-d');
           $today = now()->format('Y-m-d');
            //investiga Carbon
            if ($lastAssist == $today) {
                return redirect()->route('assist.search')->withErrors('El alumno ya posee asistencias cargada hoy');
            }
        }

        $assist = new Assist();
        $assist->student_id = $request->id;
        $assist->save();
           
        return redirect()->route('assist.search')->withSuccess('Asistencia del día cargada con éxito');
          
    }

}
