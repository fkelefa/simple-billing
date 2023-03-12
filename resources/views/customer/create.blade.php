@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            Customer Create Page

            {!! Form::open(['url' => route('customer.store'), 'method' => 'POST']) !!}
            @include('customer.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
