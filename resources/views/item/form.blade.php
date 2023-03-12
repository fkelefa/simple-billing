<div class="row">
    <div class="col-4">
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('code', 'Code', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('code', null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('name', 'Name', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('ctegory_code', 'Ctegory Code', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::select('ctegory_code', $category_codes ?? [], null, [
                    'class' => 'form-control select2-default',
                    'placeholder' => '-- please select category code --',
                    'required',
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('price', 'Price', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('description', 'Description', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </div>
</div>
