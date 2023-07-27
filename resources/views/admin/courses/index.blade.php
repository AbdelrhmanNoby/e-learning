@extends('admin.layout')

@section('content')
<div class="container">
    <h3 class="mb-3">Courses</h3>
    <a href="{{route('admin.courses.create')}}" class="btn btn-success mb-3">Add New Course</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td> <img src="{{asset("front/courses/$course->image")}}" height="100" alt=""> </td>
            <td>{{$course->name}}</td>
            <td>{{$course->price}}</td>
            <td>
                <a href="{{route("admin.courses.edit",$course->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route("admin.courses.delete",$course->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection