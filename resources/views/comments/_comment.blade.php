<div>
    <div>{{ $comment->user->name }} said:</div>
    <div>{{ $comment->content }}</div>
    @can('update', $comment)
    <div>
        <a href="{{ route('comments.edit', $comment) }}">edit</a>
    </div>
    @endcan
    <br>
</div>
