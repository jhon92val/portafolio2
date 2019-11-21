@extends('layouts.layout-admin')

@section('titulo')
    Nuevo Trabajo
@endsection

@section('contenido')
<section class="module-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title-heading">Crear Nuevo Trabajo</h2>
                    <h6 class="page-title-subheading">Ingresa la información de tu nuevo trabajo</h6>
                </div>
            </div>
        </div>
</section>
<section class="module">
        <div class="container">
            
                    <div class="row">
                        <form method="POST" action={{action('HomeController@store')}} class="formulario" enctype="multipart/form-data">
                        <div class="d-flex">
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            <input id="titulo" class="form-control" type="text" name="titulo" placeholder="" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha</label>
                            <input class="form-control" type="date" name="fecha" placeholder="Fecha" min="2000-01-01" max="2200-12-12" id="fechaTrabajo" required="">
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
                            <textarea class="form-control" name="descripcion" placeholder="Escribe algo sobre esto..." rows="8" required=""></textarea>
                        </div>

                        <div class="d-flex">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="custom-file form-group col-md-3">
                                <label for="portada" class="text-uppercase">imagen de Portada</label>
                                <input type="file" name="portada" class="form-control-file" id="portada">
                        </div>
                        <!--<div class="form-group col-md-3">
                                <label for="exampleFormControlFile1">Imagen 2</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group col-md-3">
                                <label for="exampleFormControlFile1">Imagen 3</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group col-md-3">
                                <label for="exampleFormControlFile1">Imagen 4</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>-->
                        </div>
                        <div class="form-group col-md-12 ml-1 mt-5">
                       <!-- <button type="reset" class="btn btn-brand">
                                <span>{{ __('Limpiar') }}</span>
                        </button>-->
                        <button type="submit" class="btn btn-brand float-right">
                                <span>{{ __('Guardar') }}</span>
                        </button>
                        
                        </div>
                        </form>
                    </div>
            </div>
    </section>
@endsection