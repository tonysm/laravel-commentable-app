<?php

namespace App\Http\Controllers\Concerns;

use RuntimeException;

trait Commentable
{
    public function store()
    {
        $commentable = $this->findCommentableOrFail();

        $this->authorize('addComment', $commentable);

        $commentable->comments()->create(request()->validate([
            'content' => 'required',
        ]) + [ 'user_id' => auth()->id() ]);

        return redirect()->back();
    }

    protected function findCommentableOrFail()
    {
        throw new RuntimeExceptionAlias('Must findCommentableOrFail must be implemented.');
    }
}
