@extends('layouts.app')

@section('title', 'Edit' . $comic->title)

{{-- content section --}}
@section('content')

    {{-- container --}}
    <div class="container">
        <h1 class="text-center">Edit: {{ $comic->title }}</h1>
        <div class="py-5 row justify-content-center">
            <div class="col-6">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    {{-- title edit section --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    {{-- description edit section --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" rows="10" name="description">{{ $comic->description }}</textarea>
                    </div>

                    {{-- thub edit sdection --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb:</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    {{-- price edit section --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>

                    {{-- serie edit section --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>

                    {{-- sale date edit section --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale data:</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    {{-- type edit section --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>

                    <button type="submit" class="btn btn-success">Edit comic</button>
                    
                </form>
            </div>
        </div>
    </div>
    {{-- /container --}}

@endsection
{{-- /content section --}}