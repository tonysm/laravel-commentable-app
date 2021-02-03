<form action="{{ $comment->routeForm() }}" method="post">
    @csrf

    @if($comment->exists)
        @method('PUT')
    @endif

    <div>
        <label for="content">Content</label>
        <textarea name="content" cols="30" rows="10">{{ old('content', $comment->content) }}</textarea>
        @error('content')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit">{{ $comment->exists ? 'Update' : 'Create' }}</button>
    </div>
</form>
