@extends('app')

@section('title','ログイン')

@section('content')
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-lock"></i> ログイン：</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        @include('error_card_list') 
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>

                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                <label for="email">Your email</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix"></i>

                <input class="form-control" type="password" id="password" name="password" required>
                <label for="password">Your password</label>
            </div>

            <input type="hidden" name="remember" id="remember" value="on">
            
            <div class="text-center">
                <button type="submit" class="btn btn-deep-purple aqua-gradient">ログイン</button>
            </div>
        </form>

    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>ユーザー登録がまだの方は<a href="#">こちら</a></p>
            <p>パスワードを忘れてしまった場合は <a href="#">ココをクリック</a></p>
        </div>
    </div>

</div>
@endsection
<!--/Form without header-->
