@extends('layouts.app')
@section('content')

<table border="1">
        <tr>
            <th>ID</th>
            <th>ユーザー名</th>
            <th>メールアドレス</th>
        </tr>


        @foreach($User as $User)
        <tr>
            <th>{{$User->id}}</th>
            <th>{{$User->name}}</th>
            <th>{{$User->email}}</th>
            <th><a href="{{route('admin_edit', ['id'=>$User->id])}}">編集</a></th>
            <th><a href="{{route('admin_delete', ['id'=>$User->id])}}">削除</a></th>
        </tr>
        @endforeach
</table>


@endsection