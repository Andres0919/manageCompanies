@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('messages.employees') }}</div>
                <div class="card-body">
                    <a href="{{ route('employees.create') }}" class="btn btn-success my-2">
                        {{ trans('messages.createEmployees') }}
                    </a>
                    <table class="table table-bordered table-responsive-sm table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">{{ trans('messages.name') }}</th>
                                <th class="text-center">{{ trans('messages.lastName') }}</th>
                                <th class="text-center">{{ trans('messages.company') }}</th>
                                <th class="text-center">{{ trans('messages.email') }}</th>
                                <th class="text-center">{{ trans('messages.phone') }}</th>
                                <th class="text-center">{{ trans('messages.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="buscar text-center">
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->FirstName }}</td>
                                <td>{{ $employee->LastName }}</td>
                                <td>{{ $employee->company->Name }}</td>
                                <td>{{ $employee->Email }}</td>
                                <td>{{ $employee->Phone }}</td>
                                <td>
                                    <a href="{{ route('employees.edit', $employee->id)}}" class="btn btn-sm btn-primary my-2">{{ trans('messages.edit') }}</a>
                                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Estas Seguro?')">
                                        {{ trans('messages.delete') }}
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection