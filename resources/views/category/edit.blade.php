@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            Category Edit Page

            {!! Form::model($resource, ['url' => route('category.update', $resource->id), 'method' => 'PUT']) !!}
            @include('category.form')
            {!! Form::close() !!}

        </div>
    </div>
@endsection
