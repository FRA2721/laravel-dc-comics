@extends('layouts.app')

@section('title', 'Add Comic (new)')

{{-- content section --}}
@section('content')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-6">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                {{-- title add  --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                {{-- description add --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
                </div>

                {{-- thumb add --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                {{-- price add --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                {{-- serie add --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                {{-- sale date add --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale data:</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>

                {{-- type add --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                {{-- add button --}}
                <button type="submit" class="btn btn-success">Add Comic</button>

            </form>
        </div>
    </div>
@endsection
{{-- /content section  --}}