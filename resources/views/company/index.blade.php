@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="row gy-1">
                        <div class="col-6 text-start">
                            <h2>Company</h2>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-success" href="{{ route('company.create') }}"> New Company </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Web Site</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->logo }}</td>
                                    <td>{{ $company->web_site }}</td>
                                    <td width="14%">
                                        <div class="row">
                                            <div class="col-6 text-center p-1">
                                                <a class="btn btn-primary"
                                                    href="{{ route('company.show', $company->id) }}">View</a>
                                            </div>
                                            <div class="col-6 text-center p-1">
                                                <a class="btn btn-primary"
                                                    href="{{ route('company.edit', $company->id) }}">Edit</a>
                                            </div>
                                            <div class="col-6 text-center p-1">
                                                <form action="{{ route('company.destroy', $company->id) }}" method="POST">
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
                    {!! $companies->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
