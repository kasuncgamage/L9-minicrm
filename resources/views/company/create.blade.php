@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="row gy-1">
                        <div class="col-6 text-start">
                            <h2>Add Company</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
                        </div>
                    </div>
                </div>

                <div class="card p-2">

                    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo:</label>
                            <input type="file" class="form-control date" id="logo" name="logo" placeholder="logo">
                            @error('logo')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="web_site" class="form-label">Web Site:</label>
                            <input type="text" class="form-control" id="web_site" name="web_site" placeholder="Web Site">
                            @error('web_site')
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
