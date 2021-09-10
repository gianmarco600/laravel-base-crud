@extends('layouts.app')
@section('title', 'comicInfo')

@section('content')
  <div class="container my-5">

    <div class="row my-5">
      <div class="col text-center">
        <h2>{{$comic->title}}</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-2">
        <img src="{{$comic->thumb}}" alt="">
      </div>

      <div class="col-10">
        <p>{{$comic->description}}</p>

        <div class="row mt-5">
          <div class="col-6 text-center">Prezzo: {{$comic->price}}€</div>
          <div class="col-6 text-center">Serie: {{$comic->series}}</div>
        </div>
        
        <div class="row my-2">
          <div class="col-6 text-center">Data uscita: {{$comic->sale_date}}</div>
          <div class="col-6 text-center">Tipo: {{$comic->type}}</div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-5">
      <a href="{{route('comics.index')}}" class="btn btn-primary ">back</a>
      <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">edit comic</a>
      
      <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger")">Elimina</button>
      </form>
    
    </div>

  </div>
@endsection