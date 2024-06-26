<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Assist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //////////////////////
    ////CRUD
    /////////////////////

    public function index(): View
    {
        $students = Student::first()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create(Student $student) : View
    {
        return view('students.create', ['student' => $student]);
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        Student::create($request->all());
        return redirect()->route('students.index')->withSuccess('El alumno se agrego correctamente');
    }


    public function edit(Student $student) : View
    {
        $student = Student::find($student->id);
        return view('students.edit', compact('student'));
    }


    public function update(UpdateStudentRequest $request, Student $student) : RedirectResponse
    {
        $student->update($request->all());
        return redirect()->route('students.index')->withSuccess('El alumno se edito correctamente');
    }

    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }


    public function destroy(Student $student) : RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')->withSuccess('Alumno eliminado correctamente');
    }

    public function assists($id) : View
    {   
        $student = Student::find($id);
        $assists = $student->assist;
        return view('students.assists', compact('student','assists'));
    }

    public function search() : View
    {
        return view('assists.search');
    }

}
