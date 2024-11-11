@extends('layout')

@section('content')

<div class="container-fluid page-body-wrapper">
    @include('sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Vendor Table</h4>
                            <a href="{{ route('vendor.create') }}" class="btn btn-primary mb-3">Add New Vendor</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Vendor Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vendor as $vendor)
                                            <tr>
                                                <td>{{ $vendor->id }}</td>
                                                <td>{{ $vendor->nama_vendor }}</td>
                                                <td>{{ $vendor->no_telp }}</td>
                                                <td>{{ $vendor->alamat }}</td>
                                                <td>
                                                    <a href="{{ route('vendor.edit', $vendor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('vendor.destroy', $vendor->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this vendor?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
