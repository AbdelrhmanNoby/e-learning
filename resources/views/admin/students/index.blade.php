@extends('admin.layout')

@section('content')
<div class="container">
    <h3 class="mb-3">Students</h3>
    <a href="{{route('admin.students.create')}}" class="btn btn-success mb-3">Add New student</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Spec</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td> @if (!$student->spec)
                Not Exist @else {{$student->spec}}
            @endif
              
            </td>
            <td>
                <a href="{{route("admin.students.edit",$student->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route("admin.students.delete",$student->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route("admin.students.showCourses",$student->id)}}" class="btn btn-info">Show Courses</a>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection