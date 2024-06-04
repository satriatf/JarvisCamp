@extends('template')
@section('content')
<div class="container">
    <h1 class="text-center mt-2">Daftar Tugas</h1>
    <hr>
    <div class="row">
        @foreach ($tasks as $task)
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $task['name'] }}</h4>
                    <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small> <br>
                    <span class="badge bg-warning">{{ $task['status'] }}</span>
                    <p class="card-text">{{ Str::limit($task['description'], 40, '...') }}</p>
                    <div class="mt-2"></div>
                    <a href="{{ url('/detail/' . $task['id']) }}" class="btn btn-warning">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

