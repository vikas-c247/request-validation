<!-- resources/views/companies/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Company Details</h2>

    <div class="card">
        <div class="card-header">
            <h3>{{ $company->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $company->email }}</p>
            <p><strong>Address:</strong> {{ $company->address ?? 'N/A' }}</p>
            <p><strong>Created At:</strong> {{ $company->created_at->format('d M Y') }}</p>
            <p><strong>Updated At:</strong> {{ $company->updated_at->format('d M Y') }}</p>
        </div>
    </div>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary mt-3">Back</a>
    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning mt-3">Edit</a>
@endsection
