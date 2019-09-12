@extends('layouts.app')
@section('content')
    サンプル作成<br>

    <form action='{{ route('sample_create') }}' method='post'>
        {{ csrf_field() }}
            カテゴリー：<input type='text' name='category'><br>
            内容：<input type='text' name='samplearticle'><br>
            <input type='submit' value='サンプル入力'>
    </form>




        <a href="{{ url('/sample-list') }}">編集</a>




@endsection