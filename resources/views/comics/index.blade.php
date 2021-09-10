@extends('layouts.app')
@section('title', 'Comics page')

@section('content')
  <div class="container my-4">
    
    @if (session('modifica'))
      <p class="alert alert-warning">
        {{session('modifica')}}   
      </p>         
    @endif
    @if (session('cancella'))
      <p class="alert alert-danger">
        {{session('cancella')}}   
      </p>            
    @endif

    <div class="text-center"><a class="text-center" href="{{route('comics.create')}}" class="btn btn-primary'">add comic</a></div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Titolo</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Data uscita</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">#{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}€</td>
            <td>{{$comic->sale_date}}</td>
            <td>
              <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary px-3">show</a>
              <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">edit</a>
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">remove</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection