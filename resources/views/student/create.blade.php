@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Student Management') }}</h1>
            </div>
        </div>
    </div>
</div>

<style>
    .form-wrapper {
        max-width: 600px;
        margin: auto;
    }
    .form-header {
        background-color: #6c757d;
        color: white;
        padding: 12px 20px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        font-weight: bold;
    }
    .form-body {
        background: white;
        padding: 25px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    label {
        font-weight: bold;
        margin-top: 12px;
        display: block;
    }
    input[type="text"],
    input[type="date"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 2px solid #ced4da;
        border-radius: 4px;
        font-size: 15px;
        transition: border-color 0.3s;
    }
    input:valid {
        border-color: #28a745;
    }
    input:invalid {
        border-color: #dc3545;
    }
    .submit-btn {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        background-color: #28a745;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }
    .submit-btn:hover {
        background-color: #218838;
    }
</style>

<div class="form-wrapper">

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="form-header">Add New Student</div>
    <div class="form-body">
        <form action="{{ route('student.store') }}" method="POST">
            @csrf

            <label for="student_number">Student ID:</label>
            <input class="form-control" type="text" id="student_number" name="student_number" required>

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="mname">Middle Name:</label>
            <input type="text" id="mname" name="mname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="address">Address:</label>
            <input class="form-control" type="text" id="address" name="address" required>

            <label for="zip">ZIP Code:</label>
            <input type="number" id="zip" name="zip" required>

            <label for="birthday">Birthday:</label>
            <input class="form-control" type="date" id="birthday" name="birthday" required>

            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
