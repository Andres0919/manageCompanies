@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('messages.editCompanies') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('companies.index') }}">{{ trans('messages.back') }}</a>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> {{ trans('messages.errors') }}.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($company, ['route' => ['companies.update', $company->id],'method' => 'PUT', 'files' => true]) !!}

                    @include('companies.partials.form')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection