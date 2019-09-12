@extends('layouts.app')
@section('content')

    <form action='{{ route('article_deletepost') }}' method='post'>
        {{ csrf_field() }}
                        <input type='hidden' name='id' value='{{$Article->id}}'>
                        <input type='hidden' name='userid' value='{{$Article->userid}}'>
            カテゴリー：<input type='text' name='category' value='{{$Article->category}}'><br>
            内容：<input type='text' name='article' value='{{$Article->article}}'><br>
            <input type='submit' value='データ消去！'>
    </form>

<br>
<a href="{{ url('/user/article-list') }}">変更せずに戻る</a></th>

@endsection