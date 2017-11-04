@extends('layouts.layout-admin')
@section('content')
<div class="row">
  <div class="col l12">
    <h5>List User</h5>
    <table class="table bordered">
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Instagram</th>
        <th>Photo</th>
      </tr>
      @foreach ($data as $index => $row)
        <tr>
          <td>{{++$index}}</td>
          <td>{{$row->firstName}}</td>
          <td>{{$row->email}}</td>
          <td><a href="{{$row->Instagram->link}}" target="_blank">{{$row->Instagram->link}}</a></td>
          <td><img class="responsive-img circle" src="{{url('storage/'.$row->photo)}}" style="max-height: 100px"></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
