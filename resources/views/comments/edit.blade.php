@extends('layouts.app')

@section('title', "コメント修正")

@section('content')
<div>
  <form action="/comments/{{$comment->id}}" method="post">
  {{csrf_field()}}
    <label for="comment">コメント</label>
    <textarea name="comment" id="comment" cols="30" rows="10">{{$comment->comment}}</textarea>
    <input type="hidden" name="_method" value="put">
    <input type="submit" value="修正">
  </form>
</div>

@endsection