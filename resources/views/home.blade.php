@extends('layouts.app')
@section('title', 'Comics page')

@section('content')
  <div class="container text-center">
    <h1 class="my-4">Homepage</h1>
    <a href="{{route('comics.index')}}" class="btn btn-primary my-5 py-3 px-5 fs-2">comics</a>
  </div>
@endsection