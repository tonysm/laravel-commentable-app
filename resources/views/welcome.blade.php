@extends('layouts.app')

@section('content')
    <div>
        <h1>Posts</h1>

        <ul>
            @foreach($posts as $post)
                <li>{{ $post->title }} | <a href="{{ route('posts.show', $post) }}">view</a></li>
            @endforeach
        </ul>
    </div>

    <div>
        <h1>Videos</h1>

        <ul>
            @foreach($videos as $video)
                <li>{{ $video->title }} | <a href="{{ route('videos.show', $video) }}">view</a></li>
            @endforeach
        </ul>
    </div>
@endsection
