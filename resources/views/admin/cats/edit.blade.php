@extends('admin.layout')

@section('content')
<div class="container p-5">
<form action="{{route('admin.cats.update')}}" method="POST">
    @csrf
    <input type="hidden" name="cat_id" value="{{$cat->id}}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category Name</label>
      <input type="text" name="name" value="{{$cat->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection