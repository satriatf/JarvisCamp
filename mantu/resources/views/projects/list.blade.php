@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Daftar Tabel Project</h1>
        <div class="card">
            <div class="card-header">
                <h4>Data Project </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>categories</th>
                                <th>start date</th>
                                <th>end date</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    {{-- @dd($project->status) --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->statuses->name }}</td>
                                    <td>{{ $project->categories->name }}</td>
                                    <td>{{ $project->start_date }}</td>
                                    <td>{{ $project->end_date }}</td>
                                    <td>{{ subStr($project->description,0,'20') }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('projects.edit',$project->id) }}" class="btn btn-warning me-3">Edit</a>
                                        <form action="{{ route('projects.delete',$project->id) }}" method="post">
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