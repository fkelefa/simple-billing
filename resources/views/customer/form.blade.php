<div class="row">
    <div class="col-4">
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('code', 'Code', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('code', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('name', 'Name', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('email', 'Email', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('phone_no', 'Phone No', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </div>
</div>
