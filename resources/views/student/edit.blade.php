@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Edit Student</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="form-wrapper" style="max-width: 600px; margin: auto;">
            <div class="form-header bg-primary text-white p-3 rounded-top">
                Edit Student Information
            </div>
            <div class="form-body bg-white p-4 rounded-bottom shadow-sm">
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="student_number">Student ID:</label>
                    <input type="text" id="student_number" name="student_number" class="form-control" value="{{ $student->student_number }}" required>

                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control" value="{{ $student->fname }}" required>

                    <label for="mname">Middle Name:</label>
                    <input type="text" id="mname" name="mname" class="form-control" value="{{ $student->mname }}" required>

                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" class="form-control" value="{{ $student->lname }}" required>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $student->address }}" required>

                    <label for="zip">ZIP Code:</label>
                    <input type="number" id="zip" name="zip" class="form-control" value="{{ $student->zip }}" required>

                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" value="{{ $student->birthday }}" required>

                    <button type="submit" class="btn btn-success mt-4 w-100">Update Student</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
