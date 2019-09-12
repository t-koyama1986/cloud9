@extends('layouts.app')
@section('content')

    <form action='{{ route('sample_deletepost') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：{{$Sample->id}}<br>
                        <input type='hidden' name='id' value='{{$Sample->id}}'>
            カテaaゴリー：<input type='text' name='category' value='{{$Sample->category}}'><br>
            内容：<input type='text' name='samplearticle' value='{{$Sample->samplearticle}}'><br>
            <input type='submit' value='データ消去！'>
    </form>


<br>
<a href="{{ url('/sample-list') }}">消去せずに戻る</a></th>

@endsection
