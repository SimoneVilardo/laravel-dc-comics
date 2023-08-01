@extends('layouts.app')

@section('content')
    <div class="container-blu"></div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <img class="img-comic" src="{{ $comic->thumb }}"  class="img-show">
                </div>
                <div class="row position my-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-7 me-5">
                            <h2>{{ $comic->title }}</h2>
                            <div class="button-green d-flex justify-content-between align-items-center my-3"><span class="ps-3">U.S. Price: {{ $comic->price }}</span> <span>AVAILABLE</span> <span class="pe-3">Check Availability</span></div>
                            <p>{{ $comic->description }}</p>
                        </div>
                        <div class="col-2">
                            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class="img-adv">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5 ext-primary-emphasis">
            <div class="col-6">
                <h4>Talent</h4>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Art by:</span>
                    </div>
                    <div class="col-8 px-5 text-primary">
                        <span>{{ $comic->artists }},</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Written by:</span>
                    </div>
                    <div class="col-8 px-5 text-primary">
                        <span>{{ $comic->writers }},</span>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>Series:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->series }}</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->price }}</span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-4">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="col-8 px-5 text-primary text-uppercase">
                        <span>{{ $comic->sale_date }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center p-3 m-4">
        <a class="btn btn-warning btn-sm" href="{{ route('comics.edit', $comic->id) }}">MODIFICA FUMETTO</a>
    </div>


@endsection