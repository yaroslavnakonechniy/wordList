@extends('layouts.app')

@section('content')
<h1>ADD NEW WORD</h1> 

<form action="{{route('words.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
  </div>
  <br>
  <div class="form-group">
    <label for="content">On English</label>
    <input type="text" class="form-control" id="onenglish" name="onenglish" placeholder="on english">
  </div>
  <br>
  <div class="form-group">
    <label for="title">On Polish</label>
    <input type="text" class="form-control" id="onpolish" name="onpolish"  placeholder="on polish">
  </div>
  <br>
  <div class="form-group">
    <label for="title">Description</label>
    <input type="text" class="form-control" id="description" name="description"  placeholder="description">
  </div>
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection