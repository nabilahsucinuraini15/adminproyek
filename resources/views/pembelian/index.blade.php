@extends('layout')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <h4 class="card-title">Pembelian Table</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pembelian</th>
                            <th>Nama Barang</th>
                            <th>Vendor</th>
                            <th>Mandor</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembelian as $pembelian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembelian->tanggal_pembelian }}</td>
                            <td>{{ $pembelian->nama_barang }}</td>
                            <td>{{ $pembelian->vendor->nama_vendor }}</td>
                            <td>{{ $pembelian->mandor->nama }}</td>
                            <td>{{ $pembelian->jumlah }}</td>
                            <td>{{ number_format($pembelian->harga, 2) }}</td>
                            <td>{{ number_format($pembelian->jumlah * $pembelian->harga, 2) }}</td>
                            <td>
                                <a href="{{ route('pembelian.edit', $pembelian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pembelian?');">Delete</button>
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
@endsection
