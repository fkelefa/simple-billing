@extends('layouts.master')

@section('content')
    <a href="{{ route('item.create') }}" class="btn btn-primary mb-3 px-4">Create</a>
    <div class="card">
        <div class="card-body">
            Item Page

            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                        <tr>
                            <td>
                                <a href="{{ route('item.edit', $resource->id) }}">
                                    {{ $resource->code }}
                                </a>
                            </td>
                            <td>{{ $resource->name }}</td>
                            <td>{{ $resource->category_code }}</td>
                            <td>{{ $resource->price }}</td>
                            <td>{{ $resource->description }}</td>
                            <td>
                                <a href="{{ route('item.destroy', $resource->id) }}" class="btn btn-outline-danger"
                                    data-method="delete"
                                    data-confirm="Are you sure you want to delete this item? {{ $resource->code }}">
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
    @include('item.index-js')
@endpush
