@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action=" {{ route('comics.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Descrizione</label>
                                <textarea name="description" id="description" placeholder="Inserisci la descrizione" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Immagine</label>
                                <input type="url" name="thumb" id="thumb" placeholder="Inserisci la thumb" class="form-control" required>
                            </div>
                            <div class="col-12 text-center my-5">
                                <button type="submit" class="btn btn-primary">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection