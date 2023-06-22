@extends('layouts.app')


@section('content')


    <div class="container">
    
            <h2  class="fs-4 text-secondary my-4">{{ $post->title }}</h2>

            <p>{{ $post->content }}</p>
    
    </div>

@endsection