<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('Name', trans('messages.name').':') !!}
            {!! Form::text('Name', null, ['class' => 'form-control','placeholder' => trans('messages.name'), 'required' => 'required']) !!}
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
            {!! Form::label('Logo', 'Logo:') !!}
            {!! Form::file('Logo', null, ['class' => 'form-control', 'placeholder' => 'Logo']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::label('WebSite', trans('messages.web').':') !!}
            {!! Form::text('WebSite', null, ['class' => 'form-control', 'placeholder' => trans('messages.web')]) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{trans('messages.submit')}}</button>
    </div>
</div>
