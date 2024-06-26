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
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Categories</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->nama }}</td>
                                    <td>{{ $task->statuses->name }}</td>
                                    <td>{{ $task->categories->name }}</td>
                                    <td>{{ $task->deadline }}</td>
                                    <td>{{ subStr($task->description, 0, '10') }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning me-3">Edit</a>
                                        <form action="{{ route('tasks.delete', $task->id) }}" method="post">
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
