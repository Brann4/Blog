@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Post</h1><hr>
        <div class="row">
            
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card md-4 box-shadow">
                <img class="card-img-top" src="{{ $post->file }}" width="100%" height="100%">
                <div class="card-header">
                    {{ $post->name }}
                </div>
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
                </div>
            </div>
            @endforeach
            {{ $posts->render() }}
            
        </div>
    </div>
@endsection