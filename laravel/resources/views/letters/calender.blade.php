{{-- <div class="form-group"> --}}
  {{-- <select type="datetime-local" class="form-control" id="month" name="date">月
    <option selected>月</option>
    @for ($i = 1; $i <= 12; $i++){
      echo "<option value = '{$i}'>{{$i}}</option>"  
    }
    @endfor
  </select>
  <select type="datetime-local" class="form-control" id="day" name="date">日
    <option selected>日</option>
    @for ($i = 1; $i <=31; $i++){
      echo "<option value = '{$i}'>{{$i}}</option>"
    }
    @endfor
  </select> --}}
{{-- {{-- </div> --}}
<div class="md-form">
    <label><span class="small">　　　　　　　　　　　　　　　　　　　　　(カレンダーから選択)</span></label>
    <input type="datetime-local" name="date" class="form-control" value="{{ old('date') }}">
    {{-- name="bday" --}}
</div>
<script>

</script>
