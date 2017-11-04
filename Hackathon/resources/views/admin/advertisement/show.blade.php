@extends('layouts.layout-admin')
@section('content')
<div class="row">
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
</div>
<div class="row">
  @foreach ($data->Photos as $row)
    <div class="col l4 s12">
      <img src="{{url('storage/'.$row->path)}}" class="materialboxed">
      @if ($data->userId == Auth::id())
        <a href="{{route('adsPhoto.destroy',['id' => $row->id])}}"><button class="btn red"><i class="material-icons">delete</i></button></a>
      @endif
    </div>
  @endforeach
</div>
<div class="row">
  <h5>List of bidders</h5>
  <table class="table bordered">
    <tr>
      <th>No.</th>
      <th>Account</th>
      <th>Price</th>
      <th>Note</th>
      <th>Choose</th>
    </tr>
    @foreach ($data->Bids as $index => $row)
      <tr>
        <td>{{++$index}}</td>
        <td><a href="{{$row->User->Instagram->link}}" target="_blank">{{$row->User->firstName}} {{$row->User->lastName}}</a></td>
        <td>Rp. {{number_format($row->price)}}</td>
        <td>{{$row->note}}</td>
        @if (isset($data->Transaction))
          @if ($data->Transaction->bidId == $row->id)
            <td>Choosen</td>
          @else
            <td></td>
          @endif
        @endif
      </tr>
    @endforeach
  </table>
</div>
@endsection
