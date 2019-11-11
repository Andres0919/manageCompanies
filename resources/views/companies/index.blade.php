@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('messages.companies') }}</div>

                <div class="card-body">
                    <a href="{{ route('companies.create') }}" class="btn btn-success my-2">
                        {{ trans('messages.createCompanies') }}
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">{{ trans('messages.name') }}</th>
                                <th class="text-center">{{ trans('messages.email') }}</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">{{ trans('messages.web') }}</th>
                                <th class="text-center">{{ trans('messages.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="buscar text-center">
                            @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->Name }}</td>
                                <td>{{ $company->Email }}</td>
                                <td>
                                    <a class="btn btn-link" target="_blank" href="{{ $company->Logo }}">{{ trans('messages.showLogo') }}</a>
                                <td>{{ $company->WebSite }}</td>
                                <td>
                                    <a href="{{ route('companies.edit', $company->id)}}" class="btn btn-sm btn-primary my-2">{{ trans('messages.edit') }} </a>
                                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Estas Seguro?')">
                                            {{ trans('messages.delete') }}
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection