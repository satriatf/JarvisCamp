@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Daftar Tabel Tugas</h1>
        <div class="card">
            <div class="card-header">
                <h4>Data Tabel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->status->name }}</td>
                                    <td>{{ $task->deadline }}</td>
                                    <td>{{ substr($task->description, 0, '50') }}...</td>
                                    <td class="d-flex">
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('tasks.delete', $task->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
