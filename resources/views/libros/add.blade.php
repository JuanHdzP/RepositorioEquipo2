@extends('Layout/app')
    @section('content')
    <div class="panel-body">
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-9">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Agregar libro</h6>
                </div>
              
              <form action="{{ route('libro.store') }}" method="POST">
                @method('POST')
                @csrf
              <div class="row">
                <div class="col">
                  <div class="row">
                    <div class="col-12">
                      <label class="form-label" for="">Título</label>
                      <input type="text" name="titulo" class="col-12 inputborder">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                      <label class="form-label" for="">Autor</label>
                      <input type="text" name="autor" class="col-12 inputborder">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                      <label class="form-label" for="">Existencias</label>
                      <input type="number" name="existencias" class="col-12 inputborder">
                    </div>
                  </div>
                  <br>
                  <label class="form-label" for="">Descripcion</label>
                      <div class="row">
                        <div class="col">
                          <textarea name="descripcion" id="editor">
                              <!--- Aqui va el contenido del editor de texto -->
                          </textarea>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              </div>
              <div class="col-3">
                  <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Publicación</h6>
                      </div>
                      <br>
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-12 col-sm col-xs">
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                              </div>
                              <!--
                              <div class="col-12 col-sm col-xs">
                                <button class="btn btn-sm btn-primary">Vista Previa</button>
                              </div>
                              -->
                          </div>
                      </div>
                    </div>
                  </div>
                  
                  <br>

                  <div class="card my-4">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">Editorial</h6>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                  <select name="editorial_id" class="form-select" aria-label="Editorial">
                                    <option selected>Seleccionar</option>
                                    @foreach($editoriales as $editorial)
                                      <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                                    @endforeach
                                  </select>
                                  <br>
                                </div>   
                            </div>
                        </div>
                      </div>
                    </div>
                    
                    <br>

                    <div class="card my-4">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">Tema</h6>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                <select name="tema_id" class="form-select" aria-label="Temas">
                                    <option selected>Seleccionar</option>
                                    @foreach($temas as $tema)
                                      <option value="{{$tema->id}}">{{$tema->nombre}}</option>
                                    @endforeach
                                  </select>
                                  <br>
                                </div>   
                            </div>
                        </div>
                      </div>
                    </div>

                    <br>

                      <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Imagen</h6>
                          </div>
                          <br>
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col">
                                    <div id="wrapper">
                                      <input name="img" type="file" accept="image/*" onchange="preview_image(event)">
                                      <br>
                                      <img id="output_image" class="img-fluid"/>
                                    </div>
                                    <br>
                                  </div>   
                              </div>
                          </div>
                        </div>
                      </div>

                    </div>                              
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
    @endsection