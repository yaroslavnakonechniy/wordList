@extends('layouts.app')

@section('content')

<form action="{{route('words.update', $word->id)}}" method="post">
    @csrf
    
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$word->title}}" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">On English</label>
    <input type="text" class="form-control" id="onenglish" name="onenglish" value="{{$word->onenglish}}" placeholder="Content">
  </div>
  <div class="form-group">
    <label for="title">On Polish</label>
    <input type="text" class="form-control" id="onpolish" name="onpolish" value="{{$word->onpolish}}" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{$word->description}}"  placeholder="Enter title">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection