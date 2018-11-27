@extends('app')
@section('title', 'Index')
@section('content')
    @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$post->tags->implode('tag', ', ')}}</h6>
                <p class="card-text">{{$post->content}}</p>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}

@endsection
