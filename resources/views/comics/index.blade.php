@extends('layouts.app')

@section('title', 'Comics')

{{-- content section --}}
@section('content')

    {{-- section --}}
    <section>
        <div class="container text-center mt-4">
            <h1>Comics</h1>

            {{-- add comics section --}}
            <div class="text-end">
                <a href="{{ route('comics.create') }}" class="btn btn-success">Add Comics</a>
            </div>
            {{-- /add comics section --}}

            {{-- iteration for each comics  --}}
            <div class="row row-cols-4 g-3 pt-3">
                @foreach ($comics as $comic)
                    <div class="col">

                        {{-- card section --}}
                        <div class="card">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body">

                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">Serie: {{ $comic->series }}</p>
                                <p class="card-text">Type: {{ $comic->type }}</p>

                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Show details</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success">Edit</a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Erase
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5" id="exampleModalLabel">Erase Confirmation: {{ $comic->title }}
                                                </h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <p>Are you sure that you want to erase this comics: {{ $comic->title }}?</p>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>

                                                    <button type="submit" class="btn btn-danger">Erase</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /card section --}}

                    </div>
                @endforeach
            </div>
            {{-- /iteration for each comics --}}

        </div>
    </section>
    {{-- /section --}}
@endsection
{{-- /content section --}}