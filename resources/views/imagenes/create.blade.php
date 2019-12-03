@extends('layouts.layout-admin')

@section('titulo')
    Agregar Imagenes
@endsection


@section('contenido')



<section class="module-page-title">
        

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title-heading">Agregar Nueva Imagen</h2>
                    <h6 class="page-title-subheading">Agrega un maximo de tres (3) imagenes a tu trabajo</h6>
                </div>
            </div>
        </div>
</section>
<section class="module">
    
        <div class="container">
            
                    <div class="row">
                        <form method="POST" action={{action('ImagenController@store')}} class="formulario" enctype="multipart/form-data">
                        <div class="d-flex">
                        <div class="form-group col-md-12">
                            <label for="titulo">Titulo</label>
                            <input id="titulo" class="form-control" type="text" name="titulo" placeholder="" required="" autocomplete="off">
                        </div>
                    </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="descripcion" placeholder="Escribe algo sobre esto..." rows="8" required=""></textarea>
                        </div>

                        <div class="d-flex">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="trabajo_id" value={{$trabajo_id}}>
                        <div class="custom-file form-group col-md-3">
                                <label for="imagen" class="text-uppercase">Sube una imagen de tu trabajo</label>
                                <input type="file" name="imagen" class="form-control-file" id="imagen" required>
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
                        <div class="d-flex justify-content-around form-group col-md-12 ml-1" style="margin-top:100px">
                        <div>
                        <p><a class="btn btn-sm btn-brand" href="/trabajos/{{$trabajo_id}}"><span>Regresar</span></a></p>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-outline btn-sm btn-brand" id="guardar">
                                <span>{{ __('Guardar') }}</span>
                        </button>
                        </div>
                        </div>
                        </form>
                    </div>
            </div>
    </section>
@endsection
