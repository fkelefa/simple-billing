@extends('layouts.master')

@section('content')
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3 px-4">Create</a>
    <div class="card">
        <div class="card-body">
            Customer Page

            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>
                                <a href="{{ route('customer.edit', $customer->id) }}">
                                    {{ $customer->code }}
                                </a>
                            </td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone_no }}</td>
                            <td>
                                <a href="{{ route('customer.destroy', $customer->id) }}" class="btn btn-outline-danger"
                                    data-method="delete"
                                    data-confirm="Are you sure you want to delete this customer? {{ $customer->code }}">
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
    @include('customer.index-js')
@endpush
