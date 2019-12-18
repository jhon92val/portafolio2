@extends('layouts.layout-admin')

@section('titulo')
    Editar Trabajo
@endsection


@section('contenido')



<section class="module-page-title">
        @if(session()->has('success'))        
        <div class="alert alert-success alert-dismissible fade show mx-5 py-3" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title-heading">Editar Trabajo</h2>
                    <h6 class="page-title-subheading">Aqui podras modificar la información basica de tu trabajo</h6>
                </div>
            </div>
        </div>
</section>
<section class="module">
    
        <div class="container">
            
                    <div class="row">
                        <form method="get" action={{action('HomeController@update', $trabajo->id)}} class="formulario" enctype="multipart/form-data">
                        <div class="d-flex">
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            <input id="titulo" class="form-control" type="text" name="titulo" placeholder="" required="" autocomplete="off" value="{!!  $trabajo->titulo !!}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha</label>
                            <input class="form-control" type="date" name="fecha" placeholder="Fecha" min="2000-01-01" max="2200-12-12" id="fecha" required="" value="{!!  $trabajo->fecha !!}">
                        </div>
                    </div>
                        <!--<div class="form-group col-md-12">
                            
                                <label for="categoriaSelect">Categoría</label>
                                <select class="form-control" id="categoriaSelect">
                                  <option disabled selected>Selecciona una Categoría</option>
                                  <option>Categoría 1</option>
                                  <option>Categoría 2</option>
                                  <option>Categoría 3</option>
                                  <option>Categoría 4</option>
                                  <option>Categoría 5</option>
                                </select>
                              
                        </div>-->
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="descripcion" placeholder="Escribe algo sobre esto..." rows="8" required="" >{!!  $trabajo->descripcion !!}</textarea>
                        </div>

                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                            <label for="portada" class="text-uppercase">imagen de Portada</label>
                            <input type="file" name="portada" class="form-control-file" id="portada" data-initial-preview="{{isset($trabajo->portada) ? Storage::url("../storage/images/trabajos/$trabajo->portada") : "http://www.placehold.it/200x150/AAAAAA&text=Portada+Trabajo"}}" required="">
                        
                        
                        <div class="form-group col-md-12 ml-1 mt-5">
                        <button type="submit" class="btn btn-brand float-right" id="guardar">
                                <span>{{ __('Actualizar') }}</span>
                        </button>
                        
                        </div>
                        </form>
                    </div>
            </div>
    </section>
@endsection

@section('script')
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fa/theme.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/main.js")}}" type="text/javascript"></script>
@endsection