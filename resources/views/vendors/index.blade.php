@extends('layouts.admin')

@section('page-title', 'Vendors')
@php
    $usr = Auth::guard('web')->user();
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Vendor Report</h3>
    </div>
    <div class="card-body">
        <!-- Date Range Filter Form -->
        <form method="GET" action="{{ route('vendors.vendorReports') }}" class="mb-3">
            <div class="row">
                <div class="col-md-3">
                    <label>Start Date</label>
                    <input type="date" name="start_date" value="{{ request('start_date') }}" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label>End Date</label>
                    <input type="date" name="end_date" value="{{ request('end_date') }}" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label>Vendor</label>
                    <select name="vendor_id[]" class="basic-multiple form-control" multiple="multiple" placeholder="Select Vendor">
                        @foreach ($vendors as $vendor)
                            <option value="{{ $vendor->id }}" {{ request('vendor_id') == $vendor->id ? 'selected' : '' }}>{{ $vendor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary btn-block float-right">Generate Report</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Vendor List</h3>
        @if ($usr->can('vendors.create'))
            <a href="{{ route('vendors.create') }}" class="btn btn-primary float-right">Add Vendor</a>
        @endif
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th width="10%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $vendor->name }}</td>
                        <td>{{ $vendor->email }}</td>
                        <td>{{ $vendor->phone }}</td>
                        <td>
                            @if($usr->can('vendors.edit'))
                                <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></a>
                            @endif
                            @if($usr->can('vendors.delete'))
                            <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')) { this.form.submit(); }"><i class="fa fa-trash"></i></button>
                            </form>
                            @endif
                            <a href="{{ route('vendors.show', $vendor->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-file-alt"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $vendors->links() }}
    </div>
</div>
@endsection
