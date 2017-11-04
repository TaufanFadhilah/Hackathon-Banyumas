@extends('layouts.layout')
@section('content')
<div class="container">
  <div class="row full-height">
    <div class="col l12">
      <table>
        <tr>
          <td>Title</td>
          <td>{{$data->title}}</td>
        </tr>
        <tr>
          <td>Publisher</td>
          <td>{{$data->User->firstName}}</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>{{$data->desc}}</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>Rp. {{number_format($data->price)}}</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
            @if ($data->status == 0)
              Ready
            @elseif ($data->status == 1)
              On Going
            @else
              Done
            @endif
          </td>
        </tr>
        <tr>
          <td>Published at</td>
          <td>{{$data->created_at}}</td>
        </tr>
        <tr>
          <td>Due Date</td>
          <td>{{$data->dueDate}}</td>
        </tr>
      </table>
    </div>
    @foreach ($data->Photos as $row)
      <div class="col l4 s12">
        <img src="{{url('storage/'.$row->path)}}" class="materialboxed">
        <a href="{{route('adsPhoto.destroy',['id' => $row->id])}}"><button class="btn red"><i class="material-icons">delete</i></button></a>
      </div>
    @endforeach
  </div>
  <div class="row">
    <div class="col l6">
      <a class="waves-effect waves-light btn amber modal-trigger full-width" href="#edit"><i class="material-icons left">edit</i>Edit</a>
    </div>
    <div class="col l6">
      <form class="" action="{{route('advertisement.destroy',['advertisement' => $data->id])}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn red full-width"><i class="material-icons left">delete</i>Delete</button>
      </form>
    </div>
  </div>
</div>
{{-- START EDIT MODAL --}}
<div id="edit" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Edit Advertisement</h4>
      <form action="{{route('advertisement.update',['advertisement' => $data->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="userId" value="{{Auth::id()}}">
        <input type="hidden" name="status" value="{{$data->status}}">
        <div class="input-field col l12 s12">
          <input type="text" name="title" id="title" class="validate" value="{{$data->title}}" required>
          <label for="title">Title</label>
          @if ($errors->has('title'))
              <small class="red-text">{{ $errors->first('title') }}</small>
          @endif
        </div>
        <div class="input-field col l12 s12">
          <textarea name="desc" class="materialize-textarea" id="desc"> {{$data->desc}}</textarea>
          <label for="desc">Description</label>
          @if ($errors->has('desc'))
              <small class="red-text">{{ $errors->first('desc') }}</small>
          @endif
        </div>
        <div class="input-field col l6 s12">
          <input type="number" name="price" id="price" class="validate" value="{{$data->price}}" required>
          <label for="price">Price</label>
          @if ($errors->has('price'))
              <small class="red-text">{{ $errors->first('price') }}</small>
          @endif
        </div>
        <div class="input-field col l6 s12">
          <input type="date" name="dueDate" id="dueDate" value="{{$data->dueDate}}" class="datepicker" required>
          <label for="dueDate">Due Date</label>
          @if ($errors->has('dueDate'))
              <small class="red-text">{{ $errors->first('dueDate') }}</small>
          @endif
        </div>
        <div class="file-field input-field col l12 s12">
          <div class="btn amber">
            <span><i class="material-icons">add_a_photo</i></span>
            <input name="photos[]" type="file" multiple >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more photos">
          </div>
          @if ($errors->has('photos'))
              <small class="red-text">{{ $errors->first('photos') }}</small>
          @endif
        </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn amber full-width">Save</button>
    </div>
    </form>
  </div>
{{-- END EDIT MODAL --}}
@endsection
@push('js')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('.datepicker').pickadate({
     selectMonths: true, // Creates a dropdown to control month
     selectYears: 15, // Creates a dropdown of 15 years to control year,
     today: 'Today',
     clear: 'Clear',
     close: 'Ok',
     closeOnSelect: false, // Close upon selecting a date,
     format: 'yyyy-mm-dd'
   });
  });
  </script>
@endpush
