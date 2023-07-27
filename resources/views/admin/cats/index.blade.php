@extends('admin.layout')

@section('content')
<div class="container">
    <h3 class="mb-3">Categories</h3>
    <a href="{{route('admin.cats.create')}}" class="btn btn-success mb-3">Create Category</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cats as $cat)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cat->name}}</td>
            <td>
                <a href="{{route("admin.cats.edit",$cat->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route("admin.cats.delete",$cat->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection