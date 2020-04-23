@extends('layouts.app')

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

  <form action="/comments" method="post">
    {{ csrf_field()}}
    <label for="comment">コメント</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="submit" value="コメントする">
  </form>

  <h2>コメント</h2>
  @foreach ($comments as $comment)
    @if($post->id === $comment->post_id)
    <div>
      <p>{{$comment->comment}}</p>
      @if(Auth::user()->id === $comment->user_id)
      <a href="/comments/{{$comment->id}}">修正</a>
      <form action="/comments/{{$comment->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="削除">
      </form>
      @endif
      <hr>
    </div>
    @endif
  @endforeach 
@endsection