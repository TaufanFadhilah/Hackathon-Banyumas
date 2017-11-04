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
      </div>
    @endforeach
  </div>
</div>
@endsection
@push('js')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
@endpush
