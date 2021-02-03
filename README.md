# Laravel Commentable App

This application is an example of using concerns and polymorphic relationships for creating resources.

In this example, we have a `Post` and a `Video` model and both have comments. They have different routes for creating comments, but share the same model `Comment` and that model uses its partial view.

Post comments are created in the [`PostCommentsController`](./app/Http/Controllers/PostCommentsController.php). While Video comments are created in [`VideoCommentsController`](./app/Http/Controllers/VideoCommentsController.php). However, both controllers use the same concern [`Controllers/Concerns/Commentable.php`](./app/Http/Controllers/Concerns/Commentable.php).
