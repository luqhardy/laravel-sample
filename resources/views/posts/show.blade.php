<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細: {{ $post->name }}</title>
    <style>
        body { font-family: sans-serif; margin: 2em; line-height: 1.6; }
        .post { border: 2px solid #000; padding: 1.5em; margin-bottom: 2em; }
        .post h1 { margin-top: 0; }
        .comments-area { margin-left: 2em; }
        .comment { border: 1px solid #ccc; padding: 1em; margin-top: 1em; background: #f9f9f9; }
        .comment p:last-child { margin-bottom: 0; }
    </style>
</head>
<body>

    <div class="post">
        <h1>{{ $post->name }}</h1>
        <p>
            {!! nl2br(e($post->contents)) !!}
        </p>
        <small>投稿日時: {{ $post->created_at }}</small>
    </div>

    <div class="comments-area">
        <h2>コメント一覧 ({{ $post->comments->count() }}件)</h2>
        
        @forelse ($post->comments as $comment)
            <div class="comment">
                <p>{{ $comment->body }}</p>
                <small>投稿日時: {{ $comment->created_at }}</small>
            </div>
        @empty
            <p>コメントはまだありません。</p>
        @endforelse
    </div>

</body>
</html>