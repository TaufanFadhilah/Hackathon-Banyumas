@extends('layouts.layout-admin')
@section('content')
<div class="row">
  <div class="col l12">
    <h5>{{$title}}</h5>
    <table class="table bordered">
      <tr>
        <th>No.</th>
        <th>Advertisement</th>
        <th>Instagram</th>
        <th>Price</th>
        <th>{{$action}}</th>
      </tr>
      @foreach ($data as $index => $row)
        <tr>
          <td>{{++$index}}</td>
          <td><a href="{{route('admin.advertisementShow',['advertisement' => $row->Advertisement->id])}}">{{$row->Advertisement->title}}</a></td>
          <td><a href="{{$row->Bid->User->Instagram->link}}" target="_blank">{{$row->Bid->User->firstName}} {{$row->Bid->User->lastName}}</a></td>
          <td>Rp. {{number_format($row->Bid->price)}}</td>
          @if ($row->status == 3)
            <td>
              <a href="{{route('bid.update',['id' => $row->id,'status' => 4])}}"><button class="btn blue"><i class="material-icons">payment</i></button></a>
            </td>
          @endif
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
