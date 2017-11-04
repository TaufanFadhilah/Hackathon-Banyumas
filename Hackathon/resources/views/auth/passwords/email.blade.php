@extends('layouts.layout')

@section('content')
<div class="container-fluid full-height">
  <div class="row">
    <div class="col l7 hide-on-small-only full-height">
      <img src="{{asset('img/logo-tagline.jpg')}}" style="max-height: 500px">
    </div>
    <div class="col l5 s12">
      <div class="row">
        <div class="col l12 s12 center">
          <h3>Change Password</h3>
        </div>
      </div>
      <form action="{{ route('password.email') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12">
            <input name="email" id="email" type="email" class="validate" required>
            <label for="email">Email</label>
            @if ($errors->has('email'))
                <small class="red-text">{{ $errors->first('email') }}</small>
            @endif
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s12">
            <button type="submit" class="btn amber" style="width: 100%">Send Email!</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
