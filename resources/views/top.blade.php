@extends('layouts.app')
@section('content')
<div class=container>
    <div class=abc>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</div>
    <br>
  <div class="jumbotron">
   <fieldset>
        カテゴリー：<select id="select" name="example">
            <option value="日常">日常</option>
            <option value="不機嫌">不機嫌</option>
            <option value="体調不良">体調不良</option>
        </select>
        <button id="ajax" type="button" class="btn btn-primary">候補を表示</button><br><br>

   <fieldset>
         <label><textArea id=result name="article" rows="5" cols="60"></textArea></label>
    </fieldset>


        <br>
        <br>
    </fieldset>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{secure_asset('/js/ajax.js') }}"></script>
@endsection

