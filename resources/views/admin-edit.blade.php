@extends('layouts.app')
@section('content')


    <form action='{{ route('admin_editpost') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：{{$User->id}}<br>
                        <input type='hidden' name='id' value='{{$User->id}}'>
            カテゴリー：<input type='text' name='name' value='{{$User->name}}'><br>
            内容：<input type='text' name='email' value='{{$User->email}}'><br>
            <input type='submit' value='サンプル入力'>
    </form>

<br>
<a href="{{ url('/admin/admin-list') }}">変更せずに戻る</a></th>

@endsection
