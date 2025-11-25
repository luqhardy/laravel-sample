@extends('layouts.app')

@section('title', '科目一覧')

@section('content')
    <h1 class="card-title">科目一覧</h1>
    <p class="muted">履修可能な科目を確認・登録できます。</p>

    <div class="notice" style="margin-top:12px">履修登録の締切は <strong>今週金曜 17:00</strong> です。忘れずに提出してください。</div>

    <p style="margin-top:8px"><a href="#">+ 履修登録</a></p>

    <ul style="margin-top:12px; padding-left:18px">
        <li>・Web 開発基礎 （2単位）</li>
        <li>・データベース入門 （2単位）</li>
        <li>・アルゴリズム基礎 （2単位）</li>
    </ul>

@endsection

