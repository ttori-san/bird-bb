@extends('app')

@section('title','ユーザー登録')
<!-- Modal -->
{{-- <div class="bg-image"
style="
 background-image:{{ url::image('img/wild-geese-3379677_1920.jpg')}};
 " > --}}
@section('content')
 <div  class="modal-dialog" id="elegantModalForm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 
 height: 400px;
>
 {{-- "modal fade"> --}}
{{--tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document"> --}}
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel">ユーザー登録</h3>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
          {{-- <span aria-hidden="true">&times;</span> --}}
        {{-- </button> --}}
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->

        @include('error_card_list') 

        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="md-form mb-5">
                <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                <label data-error="wrong" data-success="right" for="Form-email1">名前</label>
            </div>

            <div class="md-form mb-5">
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                 <label data-error="wrong" data-success="right" for="Form-email1">メールアドレス</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="Form-pass1" name="password" class="form-control validate">
                <label data-error="wrong" data-success="right" for="Form-pass1">パスワード</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control validate">
                <label data-error="wrong" data-success="right" for="Form-pass1">パスワード(確認用)</label>
                <p class="font-small blue-text d-flex justify-content-end">パスワードを忘れてしまった場合は <a href="#" class="blue-text ml-1">
                    ココ</a></p>
            </div>
    
            <div class="text-center mb-3">

            <button type="submit" class="btn aqua-gradient btn-block btn-rounded z-depth-1a ">登録する</button>
            </div>
        </form>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> もしくは、こちらのアカウントで登録</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <h6 class="font-small grey-text d-flex justify-content-end">ログインはこちら
           <a href="{{route('login')}}" class="blue-text ml-1">
            ログイン
          </a>
        </h6>

      </div>
    </div>
  </div>
    <!--/.Content-->
  {{-- </div>
</div> --}}
<!-- Modal -->
@endsection

<style>

  
</style>
