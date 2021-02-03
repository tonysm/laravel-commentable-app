@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('welcome') }}">&leftarrow; back</a>
    </div>

    <div>
        Edit Comment
    </div>

    @include('comments._form', ['comment' => $comment])
@endsection
