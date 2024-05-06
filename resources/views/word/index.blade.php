@extends('layouts.app')

@section('content')

<a href="{{route('words.index')}}"><button class='btn btn-warning'>en</button></a> / <a href="{{route('words.polish')}}"><button class='btn btn-warning'>pol</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">english</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>

        @foreach($words as $word)
        <tr>
            <td>{{ $word->id }}</td>
            <td>{{ $word->title }}</td>
            <td>{{ $word->onenglish }}</td>
            <td>{{ $word->description }}</td>
        </tr>
        @endforeach
  </tbody>
</table>


@endsection