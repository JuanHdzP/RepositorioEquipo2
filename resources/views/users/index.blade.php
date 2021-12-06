
@extends('Layout/app')
@section('content')

<div class="panel-body">
      @if (session('alertMesage'))
      <div class="alert alert-info alert-dismissible text-white" role="alert">
        <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('alertMesage') }}.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if (session('dangerMesage'))
      <div class="alert alert-danger alert-dismissible text-white" role="alert">
        <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('dangerMesage') }}.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h3 class="text-white text-capitalize ps-3">Usuarios</h3>
                </center>

                <!---------- Modal ----------->
                <div class="float-end">  
                    {{-- Button del modal --}}                
                    <a type="button" href="libro/add" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>
                      </a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
            <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Clave</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                </tr>  
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->telefono}}</td>
                    <td>
                    <div class="d-flex">
                        <button type='button' class="btn btn-primary"><i class="far fa-eye"></i></button>
                        <a type="button" href="" class="btn  btn-success" data-bs-toggle="modal" data-bs-target="#modalUpdate{{$user->id}}"><i class="fas fa-pen-square"></i></a>
                        <form action="{{ route('user.destroy', $user) }}" method="POST">
                          @method('DELETE')
                          @csrf
                        <button type='submit' class="btn btn-danger"                  
                        onClick="return confirm('Deseas eliminar el registro?')">
                        <i class="far fa-trash-alt"></i>
                      </div>
                      </button>           
                      </form>


                      <!---------- Modal ----------->
          <div class="modal fade" id="modalUpdate{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">  
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label=""></button>
                </div>
                <div class="modal-body">
                  <div class="container">
                  <div class="row">
                    
                    <form action="{{route('user.update', $user->id)}}" method="POST">
                      @method('PATCH')
                      
                      {{ csrf_field() }} 
                        <label class= "col" for="">Nombre:</label>
                        <input class="col from-control" type="text" name="nombre" value="{{$user->nombre}}">
                        <br>
                        <label class= "col" for="">Telefono:</label>
                        <input class="col from-control" type="tel" name="telefono" value="{{$user->telefono}}">
                        <br>
                        <label class= "col" for="">Email:</label>
                        <input class="col from-control" type="email" name="email" value="{{$user->email}}">
                        <!--
                        <br>
                        <label class= "col" for="">Contrasena:</label>
                        <input class="col from-control" type="password" name="password" value="{{$user->password}}">
                        -->
                  </div>
                <div class="modal-footer">
                        @csrf
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
              
            </div>
          </div>
              </div>
            </div>
          </div>
        <!---------- Modal Fin ----------->


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{$users->links()}}
    </div>
</div>
@endsection