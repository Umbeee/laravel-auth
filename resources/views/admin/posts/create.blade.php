@extends('layouts.app')


@section('content')

    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <h2 class="fs-4 text-secondary my-4">Crea il tuo post compilando i campi, poi invia il tutto!</h2>
            <div class="mb-3">
                <label for="post-title" class="form-label">Title</label>
                <input type="text" class="form-control" id="post-title" name="title" placeholder="Titolo">
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="post-content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">invia</button>
        </form>
    </div>


@endsection