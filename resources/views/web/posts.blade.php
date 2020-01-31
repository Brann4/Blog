@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Lista de Articulos</h1>
            <hr>
            
            <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-4 mt-2">
                    <div class="card">
                        @if($post->file)
                            <img class="card-img-top" src="{{ $post->file}}" width="100%" height="100%" >
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                        
                        <div class="card-footer">
                            <small class="text-muted">{{ $post->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            
            </div>
            {{ $posts->render() }}
        </div>
    </div>
@endsection