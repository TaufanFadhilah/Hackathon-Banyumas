@extends('layouts.layout-admin')
@section('content')
<div class="row">
  <div class="col l12">
    <h5>List Advertisement</h5>
    <table class="table bordered">
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Price</th>
        <th>Due Date</th>
        <th>Detail</th>
      </tr>
      @foreach ($data as $index => $row)
        <tr>
          <td>{{++$index}}</td>
          <td>{{$row->title}}</td>
          <td>{{$row->price}}</td>
          <td>{{$row->dueDate}}</td>
          <td><a href="{{route('admin.advertisementShow',['advertisement' => $row->id])}}"><button class="btn blue"><i class="material-icons">zoom_out_map</i></button></a></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
