
@extends('Layout/app')
@section('content')
<center><h2>Libros</h2></center>

  <div class="container">
      <div class="row">
          <table class="table">
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>Titulo</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($libros as $libro)
                  <tr>
                      <td>{{$libro->id}}</td>
                      <td>{{$libro->titulo}}</td>
                      <td><butto class="btn btn-primary">Editar</butto>
                            <butto class="btn btn-danger">Eliminar</butto>
                        </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>
  </div>
  @endsection