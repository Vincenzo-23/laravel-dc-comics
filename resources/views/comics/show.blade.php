@extends('layouts.app')

@section('title','Comics')

@section('content')

<main>
  <section>
    <div class="container">
      <h1 class="fs-2">{{ $comic->title }}</h1>
    </div>
    <div class="container">
      <ul>
        <li>Type: {{ $comic->type }}</li>
        <li>Price:: {{ $comic->price }}</li>
        <li>Sale Date: {{ $comic->sale_date }}</li>
        <li>Writer: {{ $comic->writers }}</li>
        <li>Artists: {{ $comic->artists }}</li>
      </ul>
    </div>
    <div class="container">
      <div>
        {!! $comic->description !!}
      </div>
    </div>
  </section>
</main>

@endsection