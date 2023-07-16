@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="row">
                    <div class="row gy-5">
                        <div class="col-6 text-start">
                            <h2>Edit Student</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
                        </div>
                    </div>
                </div>


                <div class="card p-2">

                    <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input value="{{ $student->first_name }}" type="text" class="form-control" id="first_name" name="first_name" placeholder="Name">
                            @error('first_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input value="{{ $student->last_name }}" type="text" class="form-control" id="last_name" name="last_name" placeholder="Name">
                            @error('last_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">DOB:</label>
                            <input value="{{ $student->date_of_birth }}" type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                                placeholder="Name">
                            @error('date_of_birth')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="id_no" class="form-label">ID:</label>
                            <input value="{{ $student->id_no }}" type="text" class="form-control" id="id_no" name="id_no" placeholder="Name">
                            @error('id_no')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <input value="{{ $student->address }}" type="text" class="form-control" id="address" name="address" placeholder="Name">
                            @error('address')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age:</label>
                            <input value="{{ $student->age }}" type="text" class="form-control" id="age" name="age" placeholder="Name">
                            @error('age')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
