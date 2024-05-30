@extends('layouts.app')

@section('title','Add a new comic')

@section('content')

<main>
  <section>

    <div class="container mb-4">
      <h2 class="fs-2">Add a new comic</h2>
    </div>
    <div class="container">

      <form action="{{route('comics.store')}}" method="POST">

      <!-- cross site request forgering -->
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Comic title">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Decription</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comic description"></textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
        </div>


        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="19.99">
        </div>

        
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Comic Series">
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="YYYY-MM-DD">
        </div>
        
        
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="Comic book">
        </div>


        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control" id="artists" placeholder="Artists">
        </div>


        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control" id="writers" placeholder="Writers">
        </div>

        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>
</main>


@endsection