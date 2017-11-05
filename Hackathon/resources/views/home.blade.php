@extends('layouts.layout')

@section('content')
<div class="container">
    @if (session('status'))
      <div class="row">
        <div class="col s12 l12">
          <div class="card green accent-4">
            <div class="card-content white-text">
              <span class="card-title">Message</span>
              <p>{{session('status')}}</p>
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="row full-height">
      <img src="{{asset('img/logo-tagline.png')}}" class="responsive-img">
    </div>
</div>
@endsection
