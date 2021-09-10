@extends('layouts.template')

@section('title', 'Info Aggiuntive')
    
@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
              {{$comic->id}})   {{$comic->title}}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p> {{$comic->thumb}}</p>
                <footer class="blockquote-footer">collegamento esterno img <cite title="Source Title">Fonte Sconosciuta</cite></footer>
              </blockquote>
            </div>
          </div>
    </div>
@endsection