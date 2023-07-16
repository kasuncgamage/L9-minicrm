@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="row">
                <div class="row gy-5">
                    <div class="col-6 text-start">
                        <h2>Show Employee Details</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
                    </div>
                </div>
            </div>


            <div class="card p-2">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name: </label> {{ $employee->first_name }}
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name: </label> {{ $employee->last_name }}
                </div>
                <div class="mb-3">
                    <label for="company_id" class="form-label">Company: </label> {{ $employee->company->name }}

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label> {{ $employee->email }}
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone: </label> {{ $employee->phone }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection