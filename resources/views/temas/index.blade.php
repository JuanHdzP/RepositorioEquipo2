
@extends('Layout/app')
@section('content')
<center><h2>Temas</h2></center>

  <div class="container">
      <div class="row">
          <table class="table">
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>nombre</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($temas as $tema)
                  <tr>
                      <td>{{$tema->id}}</td>
                      <td>{{$tema->nombre}}</td>
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