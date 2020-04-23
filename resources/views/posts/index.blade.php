<!-- layoutフォルダのapplication.blade.phpを継承すると宣言する感じ？-->
@extends('layouts.app')

<!-- @yield('title')にテンプレートごとにtitleタグの値を代入 -->
@section('title', "ポスト一覧")

<!-- application.blade.phpの@yield('content')に以下のレイアウトを代入 -->
@section('content')
  <a href="posts/create">新規作成</a>
  @foreach($posts as $post)
    <!-- @if($post->user_id === Auth::user()->id) -->
    <p>{{ $post->title}}</p>
    <p>{{ $post->content}}</p>
    <a href="/posts/{{$post->id}}">詳細</a>
    <a href="/posts/{{$post->id}}/edit">編集</a>
    <form action="/posts/{{$post->id}}" method="post">
      {{ csrf_field() }}
      <input type="submit" value="delete">
      <input type="hidden" name="_method" value="delete">
    </form>
    <hr>
    <!-- @endif -->
  @endforeach
@endsection
