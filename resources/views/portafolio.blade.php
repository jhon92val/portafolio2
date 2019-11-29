@extends('layouts.layout')

@section('titulo')
    Portafolio    
@endsection

@section('cabecera')
<section class="module-header full-height parallax bg-dark bg-dark-30 mb-5" id="home" data-background="assets/images/module-10.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 m-b-15">Portafolio</h1>
                <h1 class="h6"><span class="rotate">Visual designer | Front-end developer</span></h1>
            </div>
        </div>
        <div class="mouse-icon">
            <div class="wheel"></div>
        </div>
    </div>
</section>
@endsection



@section('contenido')
@if (count($trabajos) > 0)
    <?php 
        $colcount = count($trabajos);
        $i = 1;
    ?>
<section class=" mx-5 my-5">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="m-title c-align">
                            <h2>Mis trabajos</h2>
                            <h6>An eye for detail makes our works excellent</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="filters h6" id="filters">
                            <li><a class="current" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".branding">Branding</a></li>
                            <li><a href="#" data-filter=".design">Design</a></li>
                            <li><a href="#" data-filter=".photo">Photo</a></li>
                            <li><a href="#" data-filter=".web">Web</a></li>
                        </ul>
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
                            </div><a class="portfolio-link" href="/portafolio/detalle/{{$trabajo->id}}"></a>
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
                                </div><a class="portfolio-link" href="/portafolio-detalle/{{$trabajo->id}}"></a>
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