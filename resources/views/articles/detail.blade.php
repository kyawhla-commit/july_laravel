@extends('layouts.app')

@section('content')
    <div class="container" style="max-width:800px">

        <div class="card mb-2 border-primary">
            <div class="card-body">
                <h4 class="card-title">{{ $article->title }}</h4>
                <div class="text-muted">
                    <b class="text-info">Category:</b> {{ $article->category->name }},
                    <b>Comments:</b> {{ count($article->comments) }},
                    {{ $article->created_at->diffForHumans() }}
                </div>
                <p>{{ $article->body }}</p>
                <a href="{{ url('/articles/') }}" class="btn btn-outline-info">Back</a>
                <a href="{{ url("/articles/delete/$article->id") }}" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>

        <ul class="list-group mt-4">
            <li class="list-group-item active">
                Comments ({{ count($article->comments) }})
            </li>
            @foreach ($article->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
