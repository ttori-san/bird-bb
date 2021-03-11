@csrf
    <!--Grid column-->
    {{-- <form class="md-form" enctype="multipart/form-data" > --}}
      <div class="col-md-6 mb-4">
          <div class="file-field">
            {{-- 画像サンプル --}}
            <div class="z-depth-1-half mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                alt="example placeholder">
            </div>
            {{-- 画像投稿フォーム --}}
            <div class="d-flex justify-content-center">
              <div class="btn btn-mdb-color aqua-gradient btn-rounded float-left">
                <span>アルバムから選択</span>
                <input type="file" name="letter_image">
              </div>
            </div>
          </div>
      </div>
        <div class="md-form">
          <label>出会った鳥の名前</label>
          <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="md-form">
          <label>出会った場所</label>
          <input type="text" name="place" class="form-control" required value="{{ old('place') }}">
        </div>
        @include('letters.calender')
        {{-- <div class="md-form">
          <label>見つけた時間<span class="small">（記載がない場合、投稿した時間がそのまま表示されます）</span></label>
          <input type="text" name="time" class="form-control"  value="{{ old('time') }}">
        </div>--}}

        <div class="form-group">

          <label></label>
          <textarea name="comment" required class="form-control" rows="4" placeholder="コメント">{{ old('comment') }}</textarea>
        </div>
     {{-- </form> --}}
