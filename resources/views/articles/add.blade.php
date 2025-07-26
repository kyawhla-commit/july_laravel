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
        <form action="{{ url('/articles/create')}}" method="post">  
            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-2">
            <textarea name="body" placeholder="Body"  class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
                <option value="1">News</option>
                <option value="2">Tech</option>
            </select>
            <a href="{{ url('/articles')}}" class="btn btn-secondary">back</a>
            <button class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection