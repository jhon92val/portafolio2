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
                        <div class="m-title c-align">
                            <h2 class="display-4">Mis trabajos</h2>
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
                                    <h5 class="portfolio-title">{{$trabajo->titulo}}</h5>
                                    <h6 class="portfolio-subtitle">{{$trabajo->fecha}}</h6>
                                </div>
                            </div><a class="portfolio-link" href="/trabajos/{{$trabajo->id}}"></a>
                    </div>
                    @else 
                        <div class="portfolio-item js-tilt web design ">
                                <div class="portfolio-wrapper">
                                <div class="portfolio-img-wrap" data-background="storage/images/trabajos/{{$trabajo->portada}}"></div>
                                    <div class="portfolio-overlay"></div>
                                    <div class="portfolio-caption">
                                        <h5 class="portfolio-title">{{$trabajo->titulo}}</h5>
                                        <h6 class="portfolio-subtitle">{{$trabajo->fecha}}</h6>
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
                    <strong class="display-1 m-title c-align">¡Vaya!</strong>
                    <p class="mt-2">parece que todavia no has creado ningún trabajo</p>
                    <i class='fa fa-frown-o' style="font-size:300%"></i>

                </div>
</section>

@endif
@endsection
