@extends('layouts.app')

@section('title', 'プロフィール')

@section('content')
    <h1 class="card-title">プロフィール</h1>
    <p class="muted">あなたの基本情報を確認・更新できます。</p>

    <div style="margin-top:12px">
        <a href="#">プロフィールを編集</a>
    </div>

    <div style="margin-top:18px">
        <p>氏名： 山田 太郎</p>
        <p>学籍番号： s123456</p>
        <p>メール： taro@example.com</p>
    </div>

@endsection
