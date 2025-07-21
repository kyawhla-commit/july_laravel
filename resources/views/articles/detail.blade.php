@extends('layouts.app')

@section('content')
    <div class="container" style="max-width:800px">
        
            <div class="card mb-2 border-primary">
                <div class="card-body">
                    <h4 class="card-title">{{ $article->title }}</h4>
                    <div class="text-muted">
                        {{ $article->created_at->diffForHumans() }}
                    </div>
                    <p>{{ $article->body }}</p>
                    <a href="{{ url("/articles/") }}" class="btn btn-outline-info">Back</a>
                    <a href="{{ url("/articles/delete/$article->id") }}" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        
    </div>
@endsection