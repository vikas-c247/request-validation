<!-- resources/views/companies/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Add New Company</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Company Name<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter company name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email<span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control" placeholder="Enter company email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" placeholder="Enter company address">{{ old('address') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
