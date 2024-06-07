@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center">Daftar Project</h1>
        <hr>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-12 col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $project['nama'] }}</h4>
                            <small>Start Date : {{ $project->start_date }}</small>
                            <small>End Date:{{ $project->end_date }}</small><br>
                            <span class="badge bg-warning">{{ $project->statuses->name }}</span>
                            <p>{{ Str::limit($project['description'], 35, '...') }}</p>
                            <div class="mt-2">
                                <a href="/detail/{{ $project->id }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
