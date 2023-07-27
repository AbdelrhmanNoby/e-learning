@extends('admin.layout')

@section('content')
<div class="container">
    <h3 class="mb-3">Student Courses</h3>
    <a href="{{route('admin.students.index')}}" class="btn btn-danger mb-3">Back</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$course->name}}</td>
            <td>{{$course->pivot->status}}</td>
            <td>
                @if ($course->pivot->status != "approved")
                <a href="{{route("admin.students.approve", [$student_id,$course->id] )}}" class="btn btn-success">Approved</a>
                    
                @endif
                @if ($course->pivot->status != "rejected")
                <a href="{{route("admin.students.reject",[$student_id,$course->id] )}}" class="btn btn-danger">Rejected</a>
                    
                @endif
                {{-- <a href="{{route("admin.students.showCourses",$student->id)}}" class="btn btn-info">Show Courses</a> --}}
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection