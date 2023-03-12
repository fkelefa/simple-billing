@extends('layouts.master')

@section('content')
    <a href="{{ route('salesman.create') }}" class="btn btn-primary mb-3 px-4">Create</a>
    <div class="card">
        <div class="card-body">
            Salesman Page

            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                        <tr>
                            <td>
                                <a href="{{ route('salesman.edit', $resource->id) }}">
                                    {{ $resource->code }}
                                </a>
                            </td>
                            <td>{{ $resource->name }}</td>
                            <td>{{ $resource->description }}</td>
                            <td>
                                <a href="{{ route('salesman.destroy', $resource->id) }}" class="btn btn-outline-danger"
                                    data-method="delete"
                                    data-confirm="Are you sure you want to delete this salesman? {{ $resource->code }}">
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
    @include('salesman.index-js')
@endpush
