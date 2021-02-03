@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('welcome') }}">&leftarrow; back</a>

        <article>
            <h1>Post: {{ $post->title }}</h1>

            {{ $post->content }}
        </article>

        <section>
            <h2>Comments</h2>

            @include('comments._form', ['comment' => $post->comments()->make()])

            @foreach($post->comments as $comment)
                @include('comments._comment', ['comment' => $comment])
            @endforeach
        </section>
    </div>
@endsection
