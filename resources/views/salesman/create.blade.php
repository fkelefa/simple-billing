@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            Salesman Create Page

            {!! Form::open(['url' => route('salesman.store'), 'method' => 'POST']) !!}
            @include('salesman.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
