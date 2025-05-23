<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB; #facades should
use Response;
use Illuminate\Http\Request;
use App\Models\student; #here

class StudentController extends Controller
{
    public function index()
    {
        $students = student::get();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer',

        ]);

        student::create($request->all());
        return view('student.create');
    }

    public function edit(int $id)
    {
        $students = student::find($id);
        return view('student.edit', compact('students'));
    }

    public function update(Request $request, int $id)
    { {
            $request->validate([
                'fname' => 'required|max:255|string',
                'lname' => 'required|max:255|string',
                'midname' => 'required|max:255|string',
                'age' => 'required|integer',
                'address' => 'required|max:255|string',
                'zip' => 'required|integer',

            ]);

            student::findOrFail($id)->update($request->all());
            return redirect()->back()->with('status', 'Student Updated Successfully!');
        }
    }

    public function destroy(int $id)
    {
        $students = student::findOrFail($id);
        $students->delete();
        return redirect()->back()->with('status', 'Student Deleted');
    }
}
