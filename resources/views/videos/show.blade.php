@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('welcome') }}">&leftarrow; back</a>

        <article>
            <h1>Video: {{ $video->title }}</h1>

            {{ $video->content }}
        </article>

        <section>
            <h2>Comments</h2>

            @foreach($video->comments as $comment)
                @include('comments._comment', ['comment' => $comment])
            @endforeach
        </section>
    </div>
@endsection
