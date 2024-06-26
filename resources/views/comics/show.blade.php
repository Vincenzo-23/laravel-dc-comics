@extends('layouts.app')

@section('title','Comics')

@section('content')

<main>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <h1 class="fs-2 col-auto">{{ $comic->title }}</h1>
        <a class="text-primary ms-auto col-auto" href="{{ route('comics.edit', $comic) }}">Edit</a>
      </div>
    </div>
    <div class="container">
      <ul>
        <li class="mt-4 mb-4">
          <img src="{{ $comic->thumb }}" alt="Comic cover" height="200" width="200">
        </li>
        <li><strong>Type: </strong>{{ $comic->type }}</li>
        <li><strong>Price: </strong>{{ $comic->price }}</li>
        <li><strong>Sale Date: </strong>{{ $comic->sale_date }}</li>
        <li><strong>Writer: </strong>{{ $comic->writers }}</li>
        <li><strong>Artists: </strong>{{ $comic->artists }}</li>
      </ul>
    </div>
    <div class="container">
      <div>
        <strong>Description: </strong>{!! $comic->description !!}
      </div>
    </div>
  </section>
</main>

@endsection