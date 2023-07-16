@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="row">
                    <div class="row gy-1">
                        <div class="col-6 text-start">
                            <h2>Laravel 9 CRUD</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-success" href="{{ route('student.create') }}"> New Student </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>F. name</th>
                                <th>L. Name</th>
                                <th>DOB</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->id_no }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td width="14%">
                                        <div class="row">
                                            <div class="col-6 text-center p-1">
                                                <a class="btn btn-primary"
                                                    href="{{ route('student.edit', $student->id) }}">Edit</a>
                                            </div>
                                            <div class="col-6 text-center p-1">
                                                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
