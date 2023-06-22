@extends('layouts.app')


@section('content')

<div class="container">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <h2 class="fs-4 text-secondary my-4">Modifica i campi del tuo post, poi invia il tutto!</h2>
            <div class="mb-3">
                <label for="post-title" class="form-label">Title</label>
                <input type="text" class="form-control" id="post-title" name="title" placeholder="Titolo" value="{{ old('title') ?? $post->title }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="post-content" rows="3">{{ old('title') ?? $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">invia</button>
        </form>
    </div>


@endsection