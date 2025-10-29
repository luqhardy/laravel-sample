<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            margin: 2rem;
            background-color: #f9f9f9;
        }
        h1 {
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .post-item {
            border: 1px solid #ddd;
            background-color: #fff;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .post-item h2 {
            margin: 0 0 0.5rem 0;
            color: #333;
        }
        .post-item p {
            margin: 0;
            color: #555;
            white-space: pre-wrap; /* 改行をそのまま表示 */
        }
    </style>
    </head>
<body>

    <h1>投稿一覧</h1>

    @if ($posts->isEmpty())
        <p>まだ投稿がありません。</p>
    @else
        @foreach ($posts as $post)
            <div class="post-item">
                <h2>{{ $post->name }}</h2>
                <p>{{ $post->contents }}</p>

                </div>
        @endforeach
    @endif

</body>
</html>