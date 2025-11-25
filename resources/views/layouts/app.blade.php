<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Student Sample') }} - @yield('title')</title>
    <style>
        :root{--bg:#f5f5f5;--muted:#6b7280;--accent:#5b21b6}
        body{font-family:system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial;margin:0;background:var(--bg);color:#111827}
        .topbar{background:#efefef;padding:18px 24px;border-bottom:1px solid #e5e7eb}
        .brand{font-weight:800;font-size:28px}
        .toplinks{margin-top:8px}
        .toplinks a{color:var(--accent);margin-right:16px;text-decoration:none;font-size:18px}

        .layout{max-width:1100px;margin:20px auto;padding:0 20px;display:flex;gap:24px}
        .sidebar{width:280px}
        .panel{background:white;border:1px solid #eaeaea;padding:20px}
        .card-title{font-size:28px;margin:0 0 8px}
        .muted{color:var(--muted)}

        .menu h3{margin:0 0 8px}
        .menu ul{padding-left:18px;margin-top:6px}
        .menu li{margin:8px 0}

        .notice{background:#fff6db;border:1px solid #f2e2a8;padding:12px;margin-bottom:12px}

        .footer{background:#efefef;padding:14px 20px;text-align:left;color:var(--muted);border-top:1px solid #e5e7eb}

        @media (max-width:900px){.layout{flex-direction:column}.sidebar{width:auto}}
    </style>
</head>
<body>
    <header class="topbar">
        <div class="brand">Student Sample</div>
        <div class="toplinks">
            <a href="{{ url('/courses') }}">科目一覧</a>
            <a href="{{ url('/profile') }}">プロフィール</a>
        </div>
    </header>

    <div class="layout">
        <aside class="sidebar">
            <div class="panel menu">
                <h3>共通メニュー</h3>
                <ul>
                    <li>・ホーム</li>
                    <li>・時間割</li>
                    <li>・成績</li>
                </ul>
                <hr style="border:none;border-top:1px solid #ececec;margin:12px 0">
                <h3>学習サポート</h3>
                <ul>
                    <li>・レポートの書き方</li>
                    <li>・参考文献の探し方</li>
                </ul>
            </div>
        </aside>

        <main style="flex:1">
            <div class="panel">
                @yield('content')
            </div>
        </main>
    </div>

    <footer class="footer">© {{ config('app.name', 'Student Sample') }} — 最終更新：{{ date('Y-m-d') }}</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
            
        </script>

        <style>
        </style>

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @viteReactRefresh
        @vite(['resources/js/app.tsx', "resources/js/pages/{$page['component']}.tsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
