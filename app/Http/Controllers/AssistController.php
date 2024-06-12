<?php

namespace App\Http\Controllers;

use App\Models\Assist;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AssistController extends Controller
{
    

    public function mostrar(Request $request) : View
    {
        
        $student = Student::where('dni', $request->student_dni)->firstOrFail();

        // if (!$student){
        //     return redirect()->route('assists.search')->withErrors('Alumno no existe');
        // }
        
        return view('assists.show', compact('student'));
    }


}
