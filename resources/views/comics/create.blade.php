@extends('layouts.app')

@section('page-title', 'Comics Create')

@section('main-content')
<div class=" container ">
    <div class="mb-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">
            Return to homepage
        </a>
    </div>
   
      
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="formFile" class="form-label">add  thumb</label>
            <input class="form-control" type="file" id="formFile" name="thumb" maxlength="1024" >
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insert title..." maxlength="64" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Insert type..." maxlength="64" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Sale_date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert date">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">$ <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Insert price.." min="1" max="5000" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description..."></textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">writers</label>
            <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Insert writers"></textarea>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">artists</label>
            <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Insert artists"></textarea>
        </div>
        

        <div>
            <button type="submit" class="btn btn-success w-100">
                Add
            </button>
        </div>
    

    </form>
    
</div>
@endsection