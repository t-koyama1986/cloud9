@extends('layouts.app')
@section('content')


<div class=container>
  <div class="jumbotron">

    <form action='{{ route('article_editpost') }}' method='post'>
        {{ csrf_field() }}
                        <input type='hidden' name='id' value='{{$Article->id}}'>
                        <input type='hidden' name='userid' value='{{$Article->userid}}'>
            カテゴリー：<input type='text' name='category' value='{{$Article->category}}'><br><br>
            <textarea name='article' rows="5" cols="60">{{$Article->article}}</textarea>
            <input type='submit' class="btn btn-primary" value='編集する'>
    </form>

<br>
<a href="{{ url('/user/article-list') }}">変更せずに戻る</a></th>
  <div class="jumbotron">

@endsection
