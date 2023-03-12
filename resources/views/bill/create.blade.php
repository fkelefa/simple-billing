@extends('layouts.master')

@section('content')
    Bill Create Page

    <div class="js-params" data-select-customer-api="{{ route('utility.select.customer') }}"
        data-select-item-api="{{ route('utility.select.item') }}">
    </div>
    <div class="card">
        <div class="card-body">

            {!! Form::open(['url' => route('bill.store'), 'method' => 'POST']) !!}
            @include('bill.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@push('scripts')
    @include('bill.js')
@endpush
