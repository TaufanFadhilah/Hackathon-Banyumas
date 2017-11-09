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
  <div class="row">
    <div class="col l12 s12">
      <h4>{{$title}}</h4>
      <table class="table bordered">
        <tr>
          <th>No.</th>
          <th>Advertisement</th>
          <th>Price</th>
          <th>Due Date</th>
          @if (!isset($bid))
            <th>{{$action}}</th>
          @endif
        </tr>
        @if (isset($bid))
          @foreach ($data as $index => $row)
            <tr>
              <td>{{$row}}</td>
              <td>{{++$index}}</td>
              <td><a href="{{route('advertisement.show',['advertisement' => $row->Advertisement->id])}}">{{$row->Advertisement->title}}</a></td>
              <td>Rp. {{number_format($row->price)}}</td>
              <td>{{$row->Advertisement->dueDate}}</td>
            </tr>
          @endforeach
        @else
          @foreach ($data as $index => $row)
            <tr>
              <td>{{++$index}}</td>
              <td><a href="{{route('advertisement.show',['advertisement' => $row->Advertisement->id])}}">{{$row->Advertisement->title}}</a></td>
              <td>Rp. {{number_format($row->Bid->price)}}</td>
              <td>{{$row->Advertisement->dueDate}}</td>
              <td>
                @if ($row->status == 0)
                  <a href="{{route('bid.update',['id' => $row->id, 'status' => 1])}}"><button class="btn blue"> <i class="material-icons">check</i></button></a>
                @elseif ($row->status == 1)
                  <a class="waves-effect waves-light btn blue modal-trigger" href="#confirmation"><i class="material-icons">assessment</i></a>
                  <div id="confirmation" class="modal">
                    <div class="modal-content">
                      <h4>Confirmation</h4>
                      <form action="{{route('bid.updateConfirmation')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$row->id}}">
                        <div class="file-field input-field">
                          <div class="btn amber">
                            <i class="tiny material-icons">add_a_photo</i>
                            <input name="photo" type="file" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Photo">
                          </div>
                          @if ($errors->has('photo'))
                              <small class="red-text">{{ $errors->first('photo') }}</small>
                          @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn amber">Save</button>
                    </div>
                    </form>
                  </div>
                @elseif ($row->status == 2)
                  <a href="{{route('bid.update',['id' => $row->id, 'status' => 3])}}"><button class="btn blue"> <i class="material-icons">check</i></button></a>
                @endif
              </td>
            </tr>
          @endforeach
        @endif
      </table>
    </div>
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
    $(document).ready(function(){
    $('.modal').modal();
  });
  </script>
@endpush
