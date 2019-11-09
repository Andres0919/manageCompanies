@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    <a href="{{ route('companies.create') }}" class="btn btn-success my-2">
                        Create new company
                    </a>
                    <table class="table table-bordered table-responsive-sm table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Web Site</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="buscar text-center">
                            @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->Name }}</td>
                                <td>{{ $company->Email }}</td>
                                <td>{{ $company->Logo }}</td>
                                <td>{{ $company->WebSite }}</td>
                                <td>
                                    <a href="{{ route('companies.edit', $company->id)}}" class="btn btn-sm btn-primary my-2">Edit</a>
                                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Estas Seguro?')">
                                            Delete
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection