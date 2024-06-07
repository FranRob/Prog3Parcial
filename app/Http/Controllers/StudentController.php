<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function index(): View
    {
        return view('students.index');
    }

    public function create() : View
    {
        return view('students.create');
    }
}
