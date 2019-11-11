<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('FirstName', trans('messages.name').':') !!}
            {!! Form::text('FirstName', null, ['class' => 'form-control','placeholder' => trans('messages.name'), 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('LastName', trans('messages.lastName').':') !!}
            {!! Form::text('LastName', null, ['class' => 'form-control','placeholder' => trans('messages.lastName'), 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Company_id', trans('messages.company').':') !!}
            {!! Form::select('Company_id', $companies, null,['class' => 'form-control','placeholder' => trans('messages.company'), 'required' => 'required']) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Email', trans('messages.email').':') !!}
            {!! Form::email('Email', null, ['class' => 'form-control', 'placeholder' => trans('messages.email')]) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Phone', trans('messages.phone').':') !!}
            {!! Form::text('Phone', null, ['class' => 'form-control', 'placeholder' => trans('messages.phone')]) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{ trans('messages.submit') }}</button>
    </div>
</div>
