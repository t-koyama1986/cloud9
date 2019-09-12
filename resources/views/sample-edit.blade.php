@extends('layouts.app')
@section('content')


    <form action='{{ route('sample_editpost') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：{{$Sample->id}}<br>
                        <input type='hidden' name='id' value='{{$Sample->id}}'>
            カテゴリー：<input type='text' name='category' value='{{$Sample->category}}'><br>
            内容：<input type='text' name='samplearticle' value='{{$Sample->samplearticle}}'><br>
            <input type='submit' value='サンプル入力'>
    </form>

<br>
<a href="{{ url('/sample-list') }}">変更せずに戻る</a></th>

@endsection
