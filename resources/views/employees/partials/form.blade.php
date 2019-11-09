<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('FirstName', 'First Name:') !!}
            {!! Form::text('FirstName', null, ['class' => 'form-control','placeholder' => 'First Name', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('LastName', 'Last Name:') !!}
            {!! Form::text('LastName', null, ['class' => 'form-control','placeholder' => 'Last Name', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Company_id', 'Company:') !!}
            {!! Form::select('Company_id', $companies, null,['class' => 'form-control','placeholder' => 'Country', 'required' => 'required']) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Email', 'Email:') !!}
            {!! Form::email('Email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Phone', 'Phone:') !!}
            {!! Form::text('Phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
