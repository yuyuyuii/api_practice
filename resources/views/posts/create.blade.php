@extends('layouts.application')

@section('title', 'ポスト新規作成')

@section('content')
  <form action="/posts" method="post">
    {{csrf_field()}}
    <div>
      <label for="title">title</label>
      <input type="text" name="title" id="title">
    </div>
    <div>
      <label for="content">content</label>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div>
      <input type="submit" value="submit"> 
    </div>
  </form>
  <a href="/posts">戻る</a>
@endsection