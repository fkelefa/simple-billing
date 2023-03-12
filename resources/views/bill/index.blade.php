@extends('layouts.master')

@section('content')
    <a href="{{ route('bill.create') }}" class="btn btn-primary mb-3 px-4">Create</a>
    <div class="card">
        <div class="card-body">
            Bill Page

            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Bill No</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Grand Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                        <tr>
                            <td>
                                <a href="{{ route('bill.edit', $resource->id) }}">
                                    {{ $resource->bill_no }}
                                </a>
                            </td>
                            <td>{{ $resource->date }}</td>
                            <td>{{ $resource->customer_code }} - {{ $resource->customer_name }}</td>
                            <td>{{ $resource->grand_total }}</td>
                            <td>
                                <a href="{{ route('bill.destroy', $resource->id) }}" class="btn btn-outline-danger"
                                    data-method="delete"
                                    data-confirm="Are you sure you want to delete this bill? {{ $resource->code }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    @include('bill.index-js')
@endpush
