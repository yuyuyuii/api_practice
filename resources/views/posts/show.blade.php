@extends('layouts.application')

@section('title', 'ポスト詳細')

@section('content')
  <p>{{ $post->title}}</p>
  <p>{{ $post->content}}</p>
  <a href="/posts">戻る</a>
  <a href="/posts/{{$post->id}}/edit">編集</a>
  <form action="/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}
    <input type="submit" value="delete">
    <input type="hidden" name="_method" value="delete">
  </form>
@endsection