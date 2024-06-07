@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Daftar Tabel categories</h1>
        <div class="card">
            <div class="card-header">
                <h4>Data Tabel categories</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Tambah categories</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama categories</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categori)
                                <tr>
                                    {{-- @dd($task->categories) --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $categori->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('categories.edit',$categori->id) }}" class="btn btn-warning me-3">Edit</a>
                                        <form action="{{ route('categories.delete',$categori->id) }}" method="post">
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