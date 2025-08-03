@extends('layouts.app')

@section('content')
    <div class="container" style="max-width:800px">
        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif
        <div class="card mb-2 border-primary">
            <div class="card-body">
                <h4 class="card-title">{{ $article->title }}</h4>
                <div class="text-muted">
                    <b class="text-primary">{{ $article->user->name }}</b>
                    <b class="text-info">Category:</b> {{ $article->category->name }},
                    <b>Comments:</b> {{ count($article->comments) }},
                    {{ $article->created_at->diffForHumans() }}
                </div>
                <p>{{ $article->body }}</p>
                <a href="{{ url('/articles/') }}" class="btn btn-outline-info">Back</a>
                @can('delete-article', $article)
                    <a href="{{ url("/articles/delete/$article->id") }}" class="btn btn-outline-danger">Delete</a>
                    <a href="{{ url("/articles/edit/$article->id") }}" class="btn btn-outline-secondary">Edit</a>
                @endcan
            </div>
        </div>

        <ul class="list-group mt-4">
            <li class="list-group-item active">

                Comments ({{ count($article->comments) }})
            </li>
            @foreach ($article->comments as $comment)
                <li class="list-group-item">

                    @can('delete-comment', $comment)
                        <a href="{{ url("/comments/delete/$comment->id") }}" class="btn-close float-end"></a>
                    @endcan
                    <b class="text-primary">{{ $comment->user->name }}</b> -
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>
        @auth
            <form action="{{ url('/comments/add') }}" method="post">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <textarea name="content" class="form-control my-2"></textarea>
                <button class="btn btn-secondary">Add Comment</button>
            </form>
        @endauth
    </div>
@endsection
