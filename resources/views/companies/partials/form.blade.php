<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Name', 'Name:') !!}
            {!! Form::text('Name', null, ['class' => 'form-control','placeholder' => 'Name', 'required' => 'required']) !!}
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
            {!! Form::label('Logo', 'Logo:') !!}
            {!! Form::file('Logo', null, ['class' => 'form-control', 'placeholder' => 'Logo']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('WebSite', 'Web Site:') !!}
            {!! Form::text('WebSite', null, ['class' => 'form-control', 'placeholder' => 'Web Site']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>