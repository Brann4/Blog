@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    {{ $post->name }}
                </div>
                @if($post->file)
                    <img class="card-responsive" src="{{ $post->file}}" width="100%" height="100%" >
                @endif
                <div class="card-body">
                <h5 class="card-title">{{ $post->excerpt }}</h5>
                    {!! $post->body !!}
            </div>
                            
                <div class="card-footer">
                    <small class="text-muted">Etiquetas:
                    @foreach($post->tags as $tag)
                    <a href="#">{{$tag->name }}</a>  
                    @endforeach
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection