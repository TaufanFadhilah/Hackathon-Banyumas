@extends('layouts.layout')

@section('content')
<form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
<div class="container-fluid full-height">
  <div class="row">
    <div class="col l5 hide-on-small-only full-height">
      <img src="{{url('storage/'.Auth::user()->photo)}}" class="responsive-img">
      <div class="file-field input-field">
        <div class="btn amber">
          <i class="tiny material-icons">add_a_photo</i>
          <input name="photo" type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Photo">
        </div>
        @if ($errors->has('photo'))
            <small class="red-text">{{ $errors->first('photo') }}</small>
        @endif
      </div>
    </div>
    <div class="col l7 s12">
      <div class="row">
        <div class="col l12 s12 center">
          <h3>Your Profile</h3>
        </div>
      </div>
        <div class="row">
          <div class="input-field col s6">
            <input value="{{Auth::user()->firstName}}" name="firstName" id="first_name" type="text" class="validate" required>
            <label for="first_name">First Name</label>
            @if ($errors->has('firstName'))
                <small class="red-text">{{ $errors->first('firstName') }}</small>
            @endif
          </div>
          <div class="input-field col s6">
            <input value="{{Auth::user()->lastName}}" name="lastName" id="last_name" type="text" class="validate" required>
            <label for="last_name">Last Name</label>
            @if ($errors->has('lastName'))
                <small class="red-text">{{ $errors->first('lastName') }}</small>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input value="{{Auth::user()->email}}" name="email" id="email" type="email" class="validate" required>
            <label for="email">Email</label>
            @if ($errors->has('email'))
                <small class="red-text">{{ $errors->first('email') }}</small>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="type your password here" name="password" id="password" type="password" class="validate" required maxlength="12">
            <label for="password">Password</label>
            @if ($errors->has('password'))
                <small class="red-text">{{ $errors->first('password') }}</small>
            @endif
          </div>
          <div class="input-field col s6">
            <input value="" name="password_confirmation" id="password_confirmation" type="password" class="validate" required maxlength="12">
            <label for="password_confirmation">Confrim Password</label>
            @if ($errors->has('password_confirmation'))
                <small class="red-text">{{ $errors->first('password_confirmation') }}</small>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input value="{{Auth::user()->phone}}" name="phone" id="phone" type="tel" class="validate" required>
            <label for="phone">Phone</label>
            @if ($errors->has('phone'))
                <small class="red-text">{{ $errors->first('phone') }}</small>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="address" id="address" class="materialize-textarea" required>{{Auth::user()->address}}</textarea>
            <label for="address">Address</label>
            @if ($errors->has('address'))
                <small class="red-text">{{ $errors->first('address') }}</small>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input value="{{$instagram}}" name="instagram" id="instagram" type="text" class="validate" required>
            <label for="phone">Instagram Link</label>
            @if ($errors->has('instagram'))
                <small class="red-text">{{ $errors->first('instagram') }}</small>
            @endif
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s12">
            <button type="submit" class="btn amber" style="width: 100%">Update</button>
          </div>
        </div>
    </div>
  </div>
</div>
</form>
@endsection
