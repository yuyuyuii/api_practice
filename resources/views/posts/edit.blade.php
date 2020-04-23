@extends('layouts.app')

@section('title', 'ポスト編集')

@section('content')
  <form action="/posts/{{$post->id}}" method="post">
    {{csrf_field()}}
    @if($errors->has('title'))
      <p class="error" style="color:red;">{{$errors->first('title')}}</p>
    @endif
    <div>
      <label for="title">title</label>
      <input type="text" name="title" id="title" value="{{$post->title}}">
    </div>
    <div>
      @if($errors->has('content'))
        <p class="error" style="color:red;">{{$errors->first('content')}}</p>
      @endif
      <label for="content">content</label>
      <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="update"> 
    </div>
  </form>  

@endsection