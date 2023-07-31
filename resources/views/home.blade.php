@extends('layouts.app')

@section('content')
   <div class="bg-black">
    <div class="container">
        <div class="row position py-5">
            @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2 my-3">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <div class="dimension">
                        <img class="img-fluid img-comic" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <span><h4 class="title_h4 text-white">{{ $comic->series }}</h4></span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center">
                <button class="btn-load"><a class="text-white" href="{{ Route('comics.create') }}">ADD COMICS</a></button>
            </div>
            <div class="bage col-2">
                CURRENT SERIES
            </div>
        </div>
    </div>
</div>
@endsection

