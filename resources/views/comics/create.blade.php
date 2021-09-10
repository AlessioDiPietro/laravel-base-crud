@extends('layouts.template')

@section('title', 'aggiungi fumetto')

@section('main-content')
<div class="container">
    <form action="{{route('admin.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="titolo" >titolo</label>
          <input name="title" type="text" class="form-control" id="titolo" aria-describedby="emailHelp" placeholder="titolo">
          
        </div>
        <div class="form-group">
          <label for="des" >Descrizione</label>
          
          <textarea name="description" id="des" cols="30" rows="10" class="w-100 form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="img" >percorso img</label>
          <input type="text" class="form-control" id="img" placeholder="percorso img" name="thumb">
        </div>
        <div class="form-group">
          <label for="prezzo" >prezzo</label>
          <input type="number" class="form-control" id="prezzo" placeholder="prezzo"  name="price">
        </div>
        <div class="form-group">
          <label for="tipo" >tipo</label>
          <input type="text" class="form-control" id="tipo" placeholder="tipo" name="type">
        </div>
        <div class="form-group">
          <label for="serie" >serie</label>
          <input type="text" class="form-control" id="serie" placeholder="serie" name="series">
        </div>

        
        <button type="submit" class="btn btn-primary">ok</button>
      </form>
</div>

@endsection