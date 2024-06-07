@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Daftar Tabel Status</h1>
        <div class="card">
            <div class="card-header">
                <h4>Data Tabel Status</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('status.create') }}" class="btn btn-primary">+ Tambah Status</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statuses as $status)
                                <tr>
                                    {{-- @dd($task->status) --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $status->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('status.edit',$status->id) }}" class="btn btn-warning me-3">Edit</a>
                                        <form action="{{ route('status.delete',$status->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
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