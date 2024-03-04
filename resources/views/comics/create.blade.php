@extends('layouts.app')

@section('page-title', 'Comics Create')

@section('main-content')
    <div class=" container ">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Return to homepage
            </a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label  for="formFile" class="form-label " >add thumb</label>
                <input value="{{ old('thumb') }}" class="form-control @error('thumb') is-invalid @enderror" type="file" id="formFile" name="thumb" maxlength="1024">
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label  for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert title..."
                    maxlength="64" required>
                    @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                <input value="{{ old('type') }}" type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Insert type..."
                    maxlength="64" required>
                    @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Sale_date</label>
                <input value="{{ old('sale_date') }}" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insert date">
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">$ <span class="text-danger">*</span></label>
                <input value="{{ old('price') }}" type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insert price.."
                    min="1" max="5000" required>
                    @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea  class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Insert description...">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <textarea  class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" rows="3" placeholder="Insert writers">{{ old('writers') }}</textarea>
                @error('writers')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">artists</label>
                <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="3" placeholder="Insert artists">{{ old('artists') }}</textarea>
                @error('artists')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div>
                <button type="submit" class="btn btn-success w-100">
                    Add
                </button>
            </div>


        </form>

    </div>
@endsection
