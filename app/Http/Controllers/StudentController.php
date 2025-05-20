<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // <<< DAPAT MAY GANITO para makilala si Student model

class StudentController extends Controller
{
    public function index()
    {
        $students = \App\Models\Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
   {
    \Log::info('Request received:', $request->all());

    $request->validate([
        'student_number' => 'required|unique:students',
        'fname' => 'required',
        'lname' => 'required',
        'address' => 'required',
        'zip' => 'required|numeric',
        'birthday' => 'required|date',
    ]);

    Student::create($request->all());

    return redirect()->route('student.create')->with('success', 'Student created successfully!');
    }

    public function edit($id)
   {
    $student = Student::findOrFail($id);
    return view('student.edit', compact('student'));
   }

public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
    
    $validated = $request->validate([
        'student_number' => 'required',
        'fname' => 'required',
        'mname' => 'required',
        'lname' => 'required',
        'address' => 'required',
        'zip' => 'required|numeric',
        'birthday' => 'required|date',
    ]);

    $student->update($validated);

    return redirect()->route('student.index')->with('success', 'Student updated successfully!');
   }

   public function delete($id)
   {
    $student = Student::findOrFail($id);
    return view('student.delete', compact('student'));
   }
   public function destroy($id)
   {
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('student.index')->with('success', 'Student successfully deleted.');
   }

}
