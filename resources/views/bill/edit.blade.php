@extends('layouts.master')

@section('content')
    Bill Edit Page

    <div class="js-params" data-select-customer-api="{{ route('utility.select.customer') }}"
        data-select-item-api="{{ route('utility.select.item') }}">
    </div>
    <div class="card">
        <div class="card-body">

            {!! Form::model($resource, ['url' => route('bill.update', $resource->id), 'method' => 'PUT']) !!}
            @include('bill.form')
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@push('scripts')
    @include('bill.js')
@endpush
