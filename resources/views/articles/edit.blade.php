@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 600px">
        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif
        <form method="post">  
            @csrf

            <input type="text" name="title" placeholder="Title" value="{{ $article->title}}" class="form-control mb-2">
            <textarea name="body" placeholder="Body"  class="form-control mb-2">{{ $article->body}}</textarea>
             <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" 
                        @selected($article->category_id == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <a href="{{ url('/articles')}}" class="btn btn-secondary">back</a>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

