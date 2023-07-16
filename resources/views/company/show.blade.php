@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="row">
                <div class="row gy-5">
                    <div class="col-6 text-start">
                        <h2>Show Company Details</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
                    </div>
                </div>
            </div>


            <div class="card p-2">
                <div class="mb-3">
                    <label class="form-label">Name: </label> {{ $company->name }}
                </div>
                <div class="mb-3">
                    <label class="form-label">Email: </label> {{ $company->email }}
                </div>
                <div class="mb-3">
                    <label class="form-label">Web Site: </label> {{ $company->web_site }}
                </div>
               
                <div class="mb-3">
                    <label class="form-label">Logo: </label> {{ $company->logo }}</br>
                    <img src="{{url('/logo_uploads/')}}/{{ $company->logo }}" width="200">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection