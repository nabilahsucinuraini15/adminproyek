@extends('layout')

@section('title', 'Edit Vendor')

@section('content')

<div class="container-fluid page-body-wrapper">
    @include('sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Vendor</h4>
                            <form action="{{ route('vendor.update', $vendor->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_vendor">Vendor Name</label>
                                    <input type="text" name="nama_vendor" class="form-control" id="nama_vendor" value="{{ $vendor->nama_vendor }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">Phone Number</label>
                                    <input type="text" name="no_telp" class="form-control" id="no_telp" maxlength="15" value="{{ $vendor->no_telp }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Address</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{ $vendor->alamat }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a href="{{ route('vendor.index') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
