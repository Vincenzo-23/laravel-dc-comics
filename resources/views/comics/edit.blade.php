@extends('layouts.app')

@section('title','Edit a comic')

@section('content')

<main>
  <section>

    <div class="container mb-4">
      <h2 class="fs-2">Edit the comic {{ $comic->title }}</h2>
    </div>
    <div class="container">

      <form action="{{route('comics.update', $comic)}}" method="POST">

      <!-- cross site request forgering -->
        @csrf 

        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Comic title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comic description">{{ $comic->description }}"</textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{ $comic->thumb }}">
        </div>


        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="19.99" value="{{ $comic->price }}">
        </div>

        
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Comic Series" value="{{ $comic->series }}">
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="YYYY-MM-DD" value="{{ $comic->sale_date }}">
        </div>
        
        
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="Comic book" value="{{ $comic->type }}">
        </div>


        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control" id="artists" placeholder="Artists" value="{{ $comic->artists }}">
        </div>


        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control" id="writers" placeholder="Writers" value="{{ $comic->writers }}">
        </div>

        <button class="btn btn-primary">Salva</button>
      </form>
    </div>
  </section>
</main>

@endsection