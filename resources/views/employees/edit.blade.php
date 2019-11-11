@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('messages.editEmployees') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('employees.index') }}">{{ trans('messages.back') }}</a>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>{{ trans('messages.errors') }}.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($employee, ['route' => ['employees.update', $employee->id],'method' => 'PUT']) !!}

                    @include('employees.partials.form')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection