ajax用のテストページ

  <div class="jumbotron">
   <fieldset>
        カテゴリー：<select id="select" name="example">
            <option value="日常">日常</option>
            <option value="不機嫌">不機嫌</option>
            <option value="体調不良">体調不良</option>
        </select>
        <br>
            <button id="ajax">候補を表示</button>

   <fieldset>
         <label><textArea id=result name="article" rows="5" cols="60"></textArea></label>
    </fieldset>


        <br>
        <br>
    </fieldset>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{secure_asset('/js/ajax.js') }}"></script>


