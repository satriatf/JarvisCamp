<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">{{ $task['name'] }}</h1>
        <hr>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Tugas</h4>
                <p class="card-text"><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</p>
                <p class="card-text"><strong>Status:</strong> <span class="badge bg-warning">{{ $task['status'] }}</span></p>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $task['description'] }}</p>
                <a href="{{ url('/tasks') }}" class="btn btn-primary">Kembali ke Daftar Tugas</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
