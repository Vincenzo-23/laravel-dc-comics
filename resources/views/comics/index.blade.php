@extends('layouts.app')

@section('title','Comics')

@section('content')
<main>
    <section>
    <div class="container">
      <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Image</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale Date</th>
      <th>Type</th>
      <th>Artist</th>
      <th>Writer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
        <tr>
            <td>{{ $comic->id }}</td>
            <td>
              <a href="">
                  {{ $comic->title }}
                </a>
            </td>
            <td>{{ $comic->description}}</td>
            <td>
                <img src="{{ $comic->thumb }}" height="144" width="144" alt="">
            </td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </section>
</main>

@endsection