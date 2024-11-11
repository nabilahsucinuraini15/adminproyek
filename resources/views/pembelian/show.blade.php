<!-- resources/views/pembelian/show.blade.php -->

@extends('layout')

@section('content')
    <h1>Detail Pembelian</h1>
    <ul>
        <li><strong>Tanggal Pembelian:</strong> {{ $pembelian->tanggal_pembelian }}</li>
        <li><strong>Nama Barang:</strong> {{ $pembelian->nama_barang }}</li>
        <li><strong>Vendor:</strong> {{ $pembelian->vendor->nama_vendor }}</li>
        <li><strong>Mandor:</strong> {{ $pembelian->mandor->nama }}</li>
        <li><strong>Jumlah:</strong> {{ $pembelian->jumlah }}</li>
        <li><strong>Harga:</strong> {{ number_format($pembelian->harga, 2) }}</li>
        <li><strong>Nota:</strong> <img src="{{ Storage::url('nota/'.$pembelian->nota) }}" alt="Nota" width="200"></li>
    </ul>
    <a href="{{ route('pembelian.index') }}" class="btn btn-primary">Kembali</a>
@endsection
