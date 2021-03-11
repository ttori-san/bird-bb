@extends('app')

@section('title','投稿画面')

@section('content')
<div class="container">
  <div class="row text-center">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3">
        <div class="card-body pt-0">
          @include('error_card_list')
          <div class="card-text">
            <form method="POST" enctype="multipart/form-data" action="{{ route('articles.store') }}">
              @include('letters.form')
              <button type="submit" class="btn aqua-gradient btn-block">投稿する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!--Grid column-->