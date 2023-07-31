@extends('layouts.app')

@section('content')
    <div class="bg-black">
        <div class="container">
            <div class="row py-5 position">
                @foreach($comics as $comic)
                    <div class="col-2 py-3">
                        <div class="card bg-black">
                            <img class="dimension" src="{{ $comic->thumb }}">
                            <p class="text-white">{{ $comic->series }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <button type="button">LOAD MORE</button>
                </div>
                <div class="col-2 text-center bage">CURRENT SERIES</div>
            </div>
        </div>
    </div>
@endsection
