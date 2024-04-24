@extends('layouts.app')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">onenglish</th>
      <th scope="col">description</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>

        @foreach($words as $word)
        <tr>
            <td>{{ $word->id }}</td>
            <td>{{ $word->title }}</td>
            <td>{{ $word->onenglish }}</td>
            <td>{{ $word->description }}</td>
            <td><a href="{{route('words.edit', $word->id)}}"><button class='btn btn-warning'>Edit</button></a></td>
            <td><a href="{{route('words.destroy', $word->id)}}"><button class='btn btn-danger'>Delete</button></a></td>
        </tr>
        @endforeach
  </tbody>
</table>


        
@endsection