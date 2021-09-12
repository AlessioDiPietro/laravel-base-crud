@extends('layouts.template')
@section('title', 'area admin')

@section('main-content')
  @if (session('update'))
      <div><strong>{{session('update')}}</strong></div>
    @endif
    @if (session('delete'))
      <div><strong>{{session('delete')}}</strong></div>
    @endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">titolo</th>
        <th scope="col">descrizione</th>
        <th scope="col">tipo</th>
        <th scope="col">serie</th>
        <th scope="col">prezzo</th>
        <th scope="col">azioni</th>
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
          <td>

            <a href="{{route('admin.show', [$comic->id])}}" class="btn btn-success w-100">info</a>


            <a href="{{route('admin.edit', [$comic->id])}}" class="btn btn-primary w-100 text-center">modifica</a>


            <form action="{{ route ('admin.destroy', $comic->id)}}" method="post" class="w-100">
              @csrf
              @method('DELETE')
              <input  type="submit" value='delete' class="btn btn-danger w-100">
            </form>
            
          </td>
        </tr>
      @endforeach
      
      
    </tbody>
  </table>

@endsection