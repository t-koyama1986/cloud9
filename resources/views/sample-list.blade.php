@extends('layouts.app')
@section('content')

<table border="1">
        <tr>
            <th>ID</th>
            <th>カテゴリー</th>
            <th>サンプル文</th>
        </tr>


        @foreach($Sample as $Sample)
        <tr>
            <th>{{$Sample->id}}</th>
            <th>{{$Sample->category}}</th>
            <th>{{$Sample->samplearticle}}</th>
            <th><a href="{{route('sample_edit', ['id'=>$Sample->id])}}">編集</a></th>
            <th><a href="{{route('sample_delete', ['id'=>$Sample->id])}}">削除</a></th>
        </tr>
        @endforeach
</table>

<a href="{{ url('/sample') }}">サンプル作成topに戻る</a></th>

@endsection