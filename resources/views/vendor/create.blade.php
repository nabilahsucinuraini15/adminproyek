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
                            <h4 class="card-title">Add New Vendor</h4>

                            <form action="{{ route('vendor.store') }}" method="POST">
                                @csrf

                                <!-- Remove the Vendor ID input field since it's auto-increment -->
                                
                                <div class="form-group">
                                    <label for="nama_vendor">Vendor Name</label>
                                    <input type="text" name="nama_vendor" id="nama_vendor" class="form-control" value="{{ old('nama_vendor') }}" required>
                                    @error('nama_vendor')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_telp">Phone Number</label>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control" maxlength="15" value="{{ old('no_telp') }}" required>
                                    @error('no_telp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Address</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Save Vendor</button>
                                <a href="{{ route('vendor.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
