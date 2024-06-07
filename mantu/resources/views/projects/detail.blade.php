@extends('template')
@section('content')
<div class="container pt-5">
  <h2 class="text-center">Detail Projects</h2>
  <hr>
  <a href="{{ route('projects') }}">Kembali</a><br><br>
  <h4>{{ $projects_detail['nama'] }}</h4>
  <small>Deadline : {{ ($projects_detail['deadline']) }}</small><br>
  <small>Deadline : {{ \Carbon\Carbon::parse($projects_detail['projects'])->diffForHumans() }}</small><br>
  <span class="badge bg-warning">{{ $projects_detail['status'] }}</span>
  <p>{{ $projects_detail['description'] }}</p>
</div>
@endsection
