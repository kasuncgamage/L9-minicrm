@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="row gy-1">
                        <div class="col-6 text-start">
                            <h2>Add Employee</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
                        </div>
                    </div>
                </div>

                <div class="card p-2">

                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Name">
                            @error('first_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control date" id="last_name" name="last_name" placeholder="Name">
                            @error('last_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="company_id" class="form-label">Company:</label>
                            <select type="date" class="form-control" id="company_id" name="company_id"
                                placeholder="Company">
                                <option value="">Select Company</option>
                                @foreach($company_list as $key=>$cmp)
                                    <option value="{{$key}}">{{$cmp}}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Name">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Name">
                            @error('phone')
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
