@extends('layouts.app')

@section('title','Comics')

@section('content')
<main>
  <section>
    <div class="container mb-5">
      <div class="row">
        <div class="col-auto">
            <h1 class="fs-2">Comics</h1>
        </div>
        <div class="col-auto ms-auto">
          <a href="{{ route('comics.create') }}" class="btn btn-primary">New Comic</a>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
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
                    <a href="{{ route('comics.show', $comic) }}">
                        {{ $comic->title }}
                      </a>
                  </td>
                  <td>
                      <a href="{{ route('comics.show', $comic) }}">
                        <img src="{{ $comic->thumb }}" height="144" width="144" alt="Comic cover">
                      </a>
                  </td>
                  <td>${{ $comic->price }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ $comic->sale_date }}</td>
                  <td>{{ $comic->type }}</td>
                  <td>{{ $comic->artists }}</td>
                  <td>{{ $comic->writers }}</td>
                  <td><a class="text-primary" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</main>

@endsection