@extends('admin.layout')

@section('content')
<div class="container p-5">
<form action="{{route('admin.students.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="student_id" value="{{$student->id}}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="text" name="email" value="{{$student->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Spec</label>
      <input type="text" name="spec" value="{{$student->spec}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
@endsection