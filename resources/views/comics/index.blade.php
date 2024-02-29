@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
 <div class=" container-fluid ">
    <div class="mb-4">
        <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
            Add Comic
        </a>
    </div>
    <div class=" row ">
        <div class=" col-3">
            @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">{{ $comic->title }}</h3>
                  <p class="card-text">{{ $comic->decription }}</p>
                  <p class="card-text">{{ $comic->price }}</p>
                  <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Go comics</a>
                </div>
              </div>
            @endforeach
            

        </div>

    </div>

 </div>
@endsection