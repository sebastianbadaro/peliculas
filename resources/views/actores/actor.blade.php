@extends('layout')

@section('title')
ACTOR
@endsection

@section('body')


  <div>Nombre: {{ $actor->first_name }} {{ $actor->last_name }}</div>
  <div>Rating: {{ $actor->rating}}</div>



@endsection
