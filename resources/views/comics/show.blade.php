@extends('layouts.app')

@section('page-title', )

@section('main-content')
<div class="container">
    <div class="mb-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">
            Return to homepage
        </a>
    </div>
    <div class="row my-4 ">
        <div class="col-12">
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="" class="card-img-top">
    
                <div class="card-body">
                    <ul>
                        <li>
                            {{ $comic->title }}
                        </li>
                        <li>
                            {{ $comic->description }}
                        </li>
                        <li>
                            {{ $comic->price }}
                        </li>
                        <li>
                            {{ $comic->sale_date }}
                        </li>
                        <li>
                            {{ $comic->type }}
                        </li>
                        <li>
                            {{ $comic->artists }}
                        </li>
                        <li>
                            {{ $comic->writers }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection