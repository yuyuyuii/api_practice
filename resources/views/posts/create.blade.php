@extends('layouts.app')

@section('title', 'ポスト新規作成')

@section('content')
  <form action="/posts" method="post">
    {{csrf_field()}}
    @if($errors->has('title'))
      <p class="error" style="color:red;">{{$errors->first('title')}}</p>
    @endif
    <div>
      <label for="title">title</label>
      <input type="text" name="title" id="title">
    </div>
    @if($errors->has('content'))
      <p class="error" style="color:red;">{{$errors->first('content')}}</p>
    @endif
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