@extends('layouts.layout')
@section('content')
<div class="container-fluid">
  <div class="row full-height">
    @foreach ($data as $row)
      <div class="col l4 s12">
        <div class="card">
          <div class="card-image">
            <img src="{{url('storage/'.$row->Photos->first()->path)}}" class="ads-img">
            <span class="card-title">{{$row->title}}</span>
          </div>
          <div class="card-content">
            <p>{{$row->desc}}</p>
            <br>
            <p>Rp. {{number_format($row->price)}}</p>
          </div>
          <div class="card-action">
            <a href="{{route('advertisement.show',['advertisement' => $row->id])}}">More...</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
