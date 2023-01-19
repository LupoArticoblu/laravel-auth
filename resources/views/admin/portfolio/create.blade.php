@extends('layouts.app')

@section('title')
    | Inserisci nuovo
@endsection

@section('content')
<div class="container">
  <h1>Aggiungi file</h1>

  <form action="{{route('admin.portfolio.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-lable">Titolo</label>
      <input type="text" class="form-control @error('title')
        is-invalid
      @enderror" id="title" placeholder="Titolo" value="{{old('title')}}" name="title">
      @error('title')
        <p class="invalid-feedback">{{message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="date" class="form-lable">Data</label>
      <input type="date" class="form-control @error('date')
      is-invalid
    @enderror" id="date" value="{{old('date', date('Y-m-d'))}}" name="date">
    @error('date')
        <p class="invalid-feedback">{{message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-lable">URL Immagine</label>
      <input type="text" class="form-control @error('image')
      is-invalid
    @enderror" id="image" value="{{old('image')}}" name="image" placeholder="exemple: https\\girasole-immagine.jpeg">
    @error('image')
        <p class="invalid-feedback">{{message}}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="text" class="form-lable">Descrizione</label>
      <textarea class="form-control @error('text')
      is-invalid
    @enderror" id="text" name="text" rows="3">{{old('text')}}</textarea>
    @error('text')
        <p class="invalid-feedback">{{message}}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
</div>
@endsection  