@extends('layouts.app')
@section('content')

    <form action='{{ route('admin_deletepost') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：{{$User->id}}<br>
                        <input type='hidden' name='id' value='{{$User->id}}'>
            ユーザー名：<input type='text' name='name' value='{{$User->name}}'><br>
            E-mail：<input type='text' name='samplearticle' value='{{$User->email}}'><br>
            <input type='submit' value='データ消去！'>
    </form>


<br>
<a href="{{ url('/admin/admin-list') }}">消去せずに戻る</a></th>

@endsection
