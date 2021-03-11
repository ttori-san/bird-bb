@extends('app')

@section('title','投稿一覧')

@include('nav') 

@section('content')
<div class="container">
@foreach ($letters as $letter)
  <div class="h-25">
    <div class="card">
      <div class="bg-image hover-overlay ripple"  data-mdb-ripple-color="light">

        {{-- @if(isset($letter->file_path)) --}}
        <img
          class="img-fluid" 
          src="{{asset('storage/images/'.$letter->file_name)}}" 
        />
        {{-- @else --}}
        {{-- <p>No-img</p>
        @endif --}}

        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
        </a>
      </div>
      <div class="card-body">
        <h4 class="card-title">{{$letter->name}}</h4>
        <h6 class="card-title">
          <i class="fas fa-user-circle fa-2x mr-1"></i>
          {{$letter->place}}, {{$letter->created_at->format('Y/m/d H:i')}}
        </h6>
        
        <p class="card-text">
          {!! nl2br(e( $letter->comment )) !!}
        </p>
      </div>
    </div>
  </div>
@endforeach
</div>
  
@endsection
