@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Posts') }} | 
        <a href="{{route('admin.posts.create')}}">Crea un nuovo Post!</a>
    </h2>
    <div class="row justify-content-center">
        <div class="col">

            @foreach($posts as $elem)
            <div class="card my-3">
                <div class="card-header">
                    {{ $elem->id }} - {{ $elem->title }}
                    <a href="{{route('admin.posts.show', $elem)}}">Mostra singolo post</a>
                    <a href=""></a>
                </div>

                <div class="card-body">
                     
                    {{ $elem->content }}
                    <div>
                        <form action=" {{ route('admin.posts.destroy', $elem) }} " method="POST" class="">
            
                            @csrf
                            @method('DELETE')
        
                            <button class="btn btn-danger mt-3">Delete</a>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('admin.posts.edit', $elem  )}}"  class="btn btn-dark mt-2">Edit</a>
                    </div>
                </div>

               
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection