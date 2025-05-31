@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <a href="{{ route('student.create') }}" class="btn btn-info mb-3">Add New Employee</a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Students List</h3>
                    <h1>Alvin quimno</h1>
                    <p>di ko alam kung bagsak ako dun, pero nakapaglogin naman ako at gumana nama
                        n yung employee management, pero daming nazero kasi di sila makapag php artisan serve</p>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped fs-6 text-black">
                        <thead style="text-align: center;">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Zip</th>
                                <th>Action</th>                         
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            @foreach ($students as $items)
                                <tr>
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->fname }}</td>
                                    <td>{{ $items->lname }}</td>
                                    <td>{{ $items->midname }}</td>
                                    <td>{{ $items->age }}</td>
                                    <td>{{ $items->address }}</td>
                                    <td>{{ $items->zip }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', $items->id) }}" class="btn btn-success">
                                            Edit
                                        </a>
                                        <a href="{{ route('student.delete', $items->id) }}" class="btn btn-danger">
                                            Delete
                                        </a>
                                    
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <small>Total Students: {{ $students->count() }}</small>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection