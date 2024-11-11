@extends('layout')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <h4 class="card-title">Mandor Table</h4>
            <a href="{{ route('mandor.create') }}" class="btn btn-primary mb-3">Add New Mandor</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mandor as $mandor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mandor->nama }}</td>
                            <td>
                                <a href="{{ route('mandor.edit', $mandor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('mandor.destroy', $mandor->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this mandor?');">Delete</button>
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
