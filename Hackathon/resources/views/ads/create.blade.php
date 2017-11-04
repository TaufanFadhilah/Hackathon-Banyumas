@extends('layouts.layout')
@section('content')
<div class="container full-height">
  <div class="row">
    <h4>Create Adv</h4>
  </div>
  <div class="row">
    <form class="" action="{{route('advertisement.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="userId" value="{{Auth::id()}}">
      <input type="hidden" name="status" value="0">
      <div class="input-field col l12 s12">
        <input type="text" name="title" id="title" class="validate" required>
        <label for="title">Title</label>
        @if ($errors->has('title'))
            <small class="red-text">{{ $errors->first('title') }}</small>
        @endif
      </div>
      <div class="input-field col l12 s12">
        <textarea name="desc" class="materialize-textarea" id="desc" required></textarea>
        <label for="desc">Description</label>
        @if ($errors->has('desc'))
            <small class="red-text">{{ $errors->first('desc') }}</small>
        @endif
      </div>
      <div class="input-field col l6 s12">
        <input type="number" name="price" id="price" class="validate" required>
        <label for="price">Price</label>
        @if ($errors->has('price'))
            <small class="red-text">{{ $errors->first('price') }}</small>
        @endif
      </div>
      <div class="input-field col l6 s12">
        <input type="date" name="dueDate" id="dueDate" class="datepicker" required>
        <label for="dueDate">Due Date</label>
        @if ($errors->has('dueDate'))
            <small class="red-text">{{ $errors->first('dueDate') }}</small>
        @endif
      </div>
      <div class="file-field input-field col l12 s12">
        <div class="btn amber">
          <span><i class="material-icons">add_a_photo</i></span>
          <input name="photos[]" type="file" multiple required>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload one or more photos">
        </div>
        @if ($errors->has('photos'))
            <small class="red-text">{{ $errors->first('photos') }}</small>
        @endif
      </div>
      <div class="input-field col l12 s12">
        <button type="submit" class="btn amber full-width">Create</button>
      </div>
    </form>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $('.datepicker').pickadate({
     selectMonths: true, // Creates a dropdown to control month
     selectYears: 15, // Creates a dropdown of 15 years to control year,
     today: 'Today',
     clear: 'Clear',
     close: 'Ok',
     closeOnSelect: false, // Close upon selecting a date,
     format: 'yyyy-mm-dd'
   });
  </script>
@endpush
