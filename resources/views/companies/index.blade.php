<!-- resources/views/companies/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Companies</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-primary">Add New Company</a>
</div>

@if($companies->isEmpty())
<p>No companies found.</p>
@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $key=>$company)
        <tr>
            <td>{{ $key+1 + ( (($_GET['page'] ?? 1) - 1 ) * $companies->perPage() ) }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->address }}</td>
            <td>
                <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="pagination">
    {{ $companies->appends(request()->input())->links() }}
</div>
@endif
@endsection