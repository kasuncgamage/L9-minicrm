@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="row gy-1">
                        <div class="col-6 text-start">
                            <h2>Employee</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-success" href="{{ route('employee.create') }}"> New Employee </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>F. name</th>
                                <th>L. Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ @$employee->company->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td width="14%">
                                        <div class="row">
                                            <div class="col-6 text-center p-1">
                                                <a class="btn btn-primary"
                                                    href="{{ route('employee.show', $employee->id) }}">View</a>
                                            </div>
                                            <div class="col-6 text-center p-1">
                                                <a class="btn btn-primary"
                                                    href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                                            </div>
                                            <div class="col-6 text-center p-1">
                                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
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
                    {!! $employees->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
