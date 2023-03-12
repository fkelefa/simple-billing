@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            Item Create Page

            {!! Form::open(['url' => route('item.store'), 'method' => 'POST']) !!}
            @include('item.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
