@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-danger">Delete Confirmation</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-danger">
                <h4>Are you sure you want to delete this student?</h4>
                <p><strong>Student Name:</strong> {{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</p>
                <p><strong>Student Number:</strong> {{ $student->student_number }}</p>
                <p>This action cannot be undone.</p>
                
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <a href="{{ route('student.index') }}" class="btn btn-secondary"><b>Cancel</b></a>
                    <button type="submit" style="color: white" class="btn btn-warning"><b>Yes, Delete</b></button>
                </form>
            </div>
        </div>
    </div>
@endsection
