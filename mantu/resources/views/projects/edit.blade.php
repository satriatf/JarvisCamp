@extends('template')

@section('content')
    <div class="container">
        <h1>Edit Projects</h1>
        <div class="card">
            <div class="card-body">
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('projects.update',$projects->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-3">
                      <label for="name" class="col-4 col-form-label">Nama</label> 
                      <div class="col-8">
                        <input id="name" name="name" placeholder="Nama Tugas" type="text" class="form-control" value="{{ $projects->name}}">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="description" class="col-4 col-form-label">Deskripsi</label> 
                      <div class="col-8">
                        <textarea id="description" name="description" cols="40" rows="5" class="form-control">{{ $projects->description}}</textarea>
                      </div>
                    </div> 
                    <div class="form-group row mb-3">
                      <label for="start_date" class="col-4 col-form-label" >Start Date</label> 
                      <div class="col-8">
                        <input id="start_date" name="start_date" type="date" class="form-control" value="{{ $projects->start_date }}">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="end_date" class="col-4 col-form-label" >End Date</label> 
                      <div class="col-8">
                        <input id="end_date" name="end_date" type="date" class="form-control" value="{{ $projects->end_date }}">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="status_id" class="col-4 col-form-label">Status</label> 
                      <div class="col-8">
                        <select id="status_id" name="status_id" class="form-control">
                          @foreach ($statuses as $status)
                          <option value="{{ $status->id }}"{{ ('status_id'== $status->id)?'selected':'' }}>{{ $status->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="categories_id" class="col-4 col-form-label">Categories </label> 
                      <div class="col-8">
                        <select id="categories_id" name="categories_id" class="form-control">
                          @foreach ($categories as $categori)
                              <option value="{{ $categori->id }}"{{ ('categories_id'==$categori->id) ?'selected':'' }}>{{ $categori->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection