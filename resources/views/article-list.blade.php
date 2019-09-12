@extends('layouts.app')
@section('content')

<div class=container>
<table class="table">
        <tr>
            <!--<th>記事ID</th>-->
            <!--<th>ユーザーID</th>-->
            <th>カテゴリー</th>
            <th>文章</th>
            <th>日付</th>
        </tr>

        @foreach($Article as $Article)
        <tr>
            <!--<th>{{$Article->id}}</th>-->
            <!--<th>{{$Article->userid}}</th>-->
            <th>{{$Article->category}}</th>
            <th>{{$Article->article}}</th>
            <th>{{$Article->created_at}}</th>
            <th><a href="{{route('article_edit', ['id'=>$Article->id])}}">編集</a></th>
            <th><a href="{{route('article_delete', ['id'=>$Article->id])}}">削除</a></th>
        </tr>
        @endforeach
</table>

<a href="{{ url('/user/article') }}">topページに戻る</a></th>

@endsection