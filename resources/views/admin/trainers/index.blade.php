@extends('admin.layout')

@section('content')
<div class="container">
    <h3 class="mb-3">Trainers</h3>
    <a href="{{route('admin.trainers.create')}}" class="btn btn-success mb-3">Add New Trainer</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Spec</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trainers as $trainer)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td> <img src="{{asset("front/trainers/$trainer->image")}}" alt=""> </td>
            <td>{{$trainer->name}}</td>
            <td> @if ($trainer->phone != null)
              {{$trainer->phone}}
              @else
              Not Exist
            @endif
              
            </td>
            <td>{{$trainer->spec}}</td>
            <td>
                <a href="{{route("admin.trainers.edit",$trainer->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route("admin.trainers.delete",$trainer->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection