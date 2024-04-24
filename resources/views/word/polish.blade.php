@extends('layouts.app')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">polish</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>

        @foreach($words as $word)
        <tr>
            <td>{{ $word->id }}</td>
            <td>{{ $word->title }}</td>
            <td>{{ $word->onpolish }}</td>
            <td>{{ $word->description }}</td>
        </tr>
        @endforeach
  </tbody>
</table>


@endsection