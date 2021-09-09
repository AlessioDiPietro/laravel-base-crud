@extends('layouts.template')
@section('title', 'area admin')

@section('main-content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">titolo</th>
        <th scope="col">descrizione</th>
        <th scope="col">tipo</th>
        <th scope="col">serie</th>
        <th scope="col">prezzo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
        <th scope="row">{{$comic->id}}</th>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->type}}</td>
          <td>{{$comic->series}}</td>
          <td>{{$comic->price}}</td>
        </tr>
      @endforeach
      
      
    </tbody>
  </table>
@endsection