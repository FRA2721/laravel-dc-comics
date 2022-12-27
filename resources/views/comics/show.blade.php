
@extends('layouts.app')

@section('title', $comic->title)

{{-- content section --}}
@section('content')

    {{-- section --}}
    <section>
        <div class="container d-flex justify-content-center mt-5">
            <div class="card" style="width: 500px;">

                <img src="{{ $comic->thumb }}" class="card-img-top" alt="comic image" style="max-width: 100%">

                {{-- comic data --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">Description: {{ $comic->description }}</p>
                    <p class="card-text">Serie: {{ $comic->series }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p>
                    <p class="card-text">Data release: {{ $comic->sale_date }}</p>
                    <p class="card-text">Price :{{ $comic->price }}</p>
                </div>
                {{-- /comic data --}}

            </div>
    </section>
    {{-- /section --}}

@endsection
{{-- /content section --}}