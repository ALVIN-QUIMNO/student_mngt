@extends('layouts.app')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{ route('student.create') }}" class="btn btn-info mb-3">Add New Student</a>

            <div class="row">
                <div class="card w-100">
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-black">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Number</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>ZIP Code</th>
                                    <th>Birthday</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->student_number }}</td>
                                        <td>{{ $student->fname }}</td>
                                        <td>{{ $student->mname }}</td>
                                        <td>{{ $student->lname }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->zip }}</td>
                                        <td>{{ $student->birthday }}</td>
                                        <td>
                                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($students->isEmpty())
                            <div class="text-center text-muted mt-3">
                                No students found.
                            </div>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        Total Students: {{ $students->count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
