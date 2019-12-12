@extends('layouts.layout-admin')

@section('titulo')
    Panel Administrador
@endsection

@section('contenido')
@if (count($trabajos) > 0)
    <?php 
        $colcount = count($trabajos);
        $i = 1;
    ?>
<section class="module-page-title mb-5">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="m-title c-align" style="margin-bottom:15px">
                            <h2>Mis trabajos</h2>
                            <h6>An eye for detail makes our works excellent</h6>
                        </div>
                    </div>
                </div>
                
            </div>
    <div class="container-fluid">
        <div class="row row-portfolio" data-columns="4">
                <div class="grid-sizer"></div>
                @foreach ($trabajos as $trabajo)
                    @if ($i == $colcount)
                    <div class="portfolio-item js-tilt web design ">
                            <div class="portfolio-wrapper">
                            <div class="portfolio-img-wrap" data-background="storage/images/trabajos/{{$trabajo->portada}}"></div>
                                <div class="portfolio-overlay"></div>
                                <div class="portfolio-caption">
                                    <h4 class="portfolio-title">{{$trabajo->titulo}}</h4>
                                    <h5 class="portfolio-subtitle fechaTexto prueba">{{$trabajo->fecha}}</h5>
                                </div>
                            </div><a class="portfolio-link" href="/trabajos/{{$trabajo->id}}"></a>
                            

                    </div>
                    
                    @else 
                        <div class="portfolio-item js-tilt web design ">
                                <div class="portfolio-wrapper">
                                <div class="portfolio-img-wrap" data-background="storage/images/trabajos/{{$trabajo->portada}}"></div>
                                    <div class="portfolio-overlay"></div>
                                    <div class="portfolio-caption">
                                        <h4 class="portfolio-title">{{$trabajo->titulo}}</h4>
                                        <h5 class="portfolio-subtitle fechaTexto prueba">{{$trabajo->fecha}}</h5>
                                    </div>
                                </div><a class="portfolio-link" href="/trabajos/{{$trabajo->id}}"></a>
                                
                        </div>
                        
                                       
                    @endif

                    <?php $i++; ?>
                    
                @endforeach               
        </div>
    </div>
</section>

@else
<section class="module-page-title mx-5 mb-5">
                <div class="text-uppercase text-center">
                    <p class="mt-2">No hay trabajos para mostrar. Para crear uno has clic <a href="/trabajos/crear">aquí</a></p>
                </div>
</section>

@endif
@endsection

@section('script')
    <script>
    var fechaOld = document.getElementsByTagName('h5').innerHTML;      
    var fechaNew = fechaOld.split('-').reverse().join('/');
    document.getElementsByTagName('h5').innerHTML= fechaNew;
    </script>    
@endsection