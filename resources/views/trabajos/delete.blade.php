@extends('layouts.layout-admin')

@section('titulo')
    Borrar Trabajo
@endsection

@section('contenido')
<section class="module-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title-heading">Crear Nuevo Trabajo</h2>
                    <h6 class="page-title-subheading">Aquí podrás ingresar tus nuevos trabajos</h6>
                </div>
            </div>
        </div>
</section>
<section class="module">
        <div class="container">
            
                    <div class="row">
                        <form method="POST" action="">

                        <div class="form-group col-md-12">
                            <input class="form-control" type="text" name="titulo" placeholder="Titulo" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <input class="form-control" type="date" name="fecha" placeholder="Fecha" min="2000-01-01" max="2200-12-12" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <input class="form-control" type="text" name="categoria" placeholder="Categoria" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" placeholder="Escribe algo sobre esto..." rows="8" required=""></textarea>
                        </div>
                        
                        <div class="form-group col-md-12 ml-2 mt-5">
                        <button type="submit" class="btn btn-brand">
                                <span>{{ __('Guardar') }}</span>
                        </button>
                        </div>
                        </form>
                    </div>
            </div>
        
    </section>
@endsection