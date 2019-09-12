@extends('layouts.app')
@section('content')
<div class=container>
<form action='{{ route('article_create') }}' method='post'>
　{{ csrf_field() }}
  <div class="jumbotron">
   <fieldset>
    <input type="hidden" name='userid' value='{{$UID}}'>
    <!--↑　コレで、ID番号を呼び出す-->

        カテゴリー：<select id="select" name="category">
            <option value="日常">日常</option>
            <option value="不機嫌">不機嫌</option>
            <option value="体調不良">体調不良</option>
        </select>
        <button id="ajax"  type="button" class="btn btn-primary">候補を表示</button><br><br>
        <label><textArea id=result name="article" rows="5" cols="60"></textArea></label>
     <input type="submit" value="送信" class="btn btn-primary">
    </fieldset>
  </div>
</form>
</div>
<br>


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
            <!--<th><a href="{{route('article_edit', ['id'=>$Article->id])}}">編集</a></th>-->
        </tr>
        @endforeach
<a href="{{ url('/user/article-list') }}">過去の記事の閲覧・編集ページへ</a></th>
</table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{secure_asset('/js/ajax.js') }}"></script>
@endsection
