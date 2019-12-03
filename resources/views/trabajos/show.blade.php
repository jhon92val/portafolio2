@extends('layouts.layout-admin')

@section('titulo')
    Crear {{$trabajo->titulo}}
@endsection

@section('contenido')
@if(session()->has('success'))        
        <div class="alert alert-success alert-dismissible fade show mx-5 py-3" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>
        @endif
<section class="module-page-title">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="m-b-10">{{$trabajo->titulo}}</h2>
                <ul class="post-meta h6">
                    <li>{{$trabajo->fecha}}</li>
                    <li>In <a href="#">Branding</a>, <a href="#">Design</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <p>{{$trabajo->descripcion}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    </div>
</section>
@php
    $trabajo_id= $trabajo->id;
@endphp
<section class="module">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                    <p><a class="btn btn-outline btn-sm btn-brand" href="/home"><span>Regresar</span></a></p>
                </div>
                <div class="col-md-3">
                <p><button class="btn  btn-sm btn-brand" data-toggle="modal" data-target="#exampleModal" href="/imagenes/crear/{{$trabajo->id}}"><span>Subir Imagenes</span></button></p>
                </div>
                    <div class="modal fade bd-example-modal-xlg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Sube una imagen para este trabajo</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
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
                        <div class="custom-file form-group col-md-12">
                                <label for="imagen" class="text-uppercase">Sube una imagen de tu trabajo</label>
                                <input type="file" name="imagen" class="form-control-file" id="imagen" required>
                        </div>
                        </div>
                        <div class="d-flex justify-content-around form-group col-md-12 ml-1" style="margin-top:100px">
                        <div>
                        </div>
                        <div>
                        
                        </div>
                        </div>
                        
                    </div>
            </div>
        </div>
                            <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm btn-brand" id="guardar">
                                            <span>{{ __('Guardar') }}</span>
                                    </button>
                            </div></form>
                          </div>
                        </div>
                    </div>

                <!--
                <div class="col-md-3">
                <p><a class="btn btn-outline btn-sm btn-brand" href="/imagenes/crear/{{$trabajo->id}}"><span>Subir Imagenes</span></a></p>
                </div>
                -->
               
            </div>
        </div>
    </section>

    
    @if (count($trabajo->imagenes) > 0)
    <?php 
        $colcount = count($trabajo->imagenes);
        $i = 1;
    ?>
<section class="mb-5 mx-5">
    <div class="container-fluid">
            
        <div class="row row-portfolio" data-columns="4">
                <div class="grid-sizer"></div>
            <div class="portfolio-item js-tilt branding photo large">
                <div class="portfolio-wrapper">
                <div class="portfolio-img-wrap" data-background="../storage/images/trabajos/{{$trabajo->portada}}"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Portada</h5>
                        <h6 class="portfolio-subtitle">Branding</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
                @foreach ($trabajo->imagenes as $imagen)
                    @if ($i == $colcount)
                    <div class="portfolio-item js-tilt web design ">
                            <div class="portfolio-wrapper">
                            <div class="portfolio-img-wrap" data-background="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}"></div>
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-caption">
                                    <h5 class="portfolio-title">{{$imagen->titulo}}</h5>
                                    <h6 class="portfolio-subtitle" id="fechaTexto">{{$imagen->fecha}}</h6>
                                </div>
                            </div><a class="portfolio-link" href="#"></a>
                    </div>
                    @else 
                        <div class="portfolio-item js-tilt web design ">
                            <div class="portfolio-wrapper">
                            <div class="portfolio-img-wrap" data-background="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}"></div>
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-caption">
                                    <h5 class="portfolio-title">{{$imagen->titulo}}</h5>
                                    <h6 class="portfolio-subtitle">{{$imagen->fecha}}</h6>
                                </div>
                            </div><a class="portfolio-link" href="#"></a>
                        </div>                  
                    @endif

                    <?php $i++; ?>
                    
                @endforeach               
        </div>
    </div>
</section>

@else
<section class="mx-5 mb-5">
    
                <div class="text-uppercase text-center">
                    <p class="mt-2">No hay imagenes para mostrar.</p>

                </div>
</section>

@endif


@endsection

