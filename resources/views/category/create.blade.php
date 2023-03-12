@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            Category Create Page

            {!! Form::open(['url' => route('category.store'), 'method' => 'POST']) !!}
            @include('category.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
