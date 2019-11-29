@extends('layouts.layout-admin')

@section('titulo')
    Crear {{$trabajo->titulo}}
@endsection


@section('cabecera')
<section class="module-header full-height parallax bg-dark bg-dark-30" data-background="../storage/images/trabajos/{{$trabajo->portada}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="h1 m-b-10">{{$trabajo->titulo}}</h1>
                <ul class="post-meta h6">
                    <li>{{$trabajo->fecha}}</li>
                    <li>In <a href="#">Branding</a>, <a href="#">Design</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</section>
@endsection

@section('contenido')
<section class="module-page-title-1">
    <div class="container">
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

<!-- Portfolio Single-->
<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-content">
                    <div class="gallery">
                        <figure class="gallery-item">
                            <div class="gallery-icon"><a href="assets/images/portfolio/s-1.jpg" title="Title" rel="gallery"><img src="assets/images/portfolio/s-1.jpg" alt=""></a></div>
                            <figcaption class="gallery-caption">The Deep Surface</figcaption>
                        </figure>
                    </div>
                    <div class="gallery gallery-columns-2">
                        <figure class="gallery-item">
                            <div class="gallery-icon"><a href="assets/images/portfolio/s-2.jpg" title="Title" rel="gallery"><img src="assets/images/portfolio/s-2.jpg" alt=""></a></div>
                            <figcaption class="gallery-caption">The Deep Surface</figcaption>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon"><a href="assets/images/portfolio/s-3.jpg" title="Title" rel="gallery"><img src="assets/images/portfolio/s-3.jpg" alt=""></a></div>
                            <figcaption class="gallery-caption">The Body Space</figcaption>
                        </figure>
                    </div>
                    <div class="gallery">
                        <figure class="gallery-item">
                            <div class="gallery-icon"><a href="assets/images/portfolio/s-4.jpg" title="Title" rel="gallery"><img src="assets/images/portfolio/s-4.jpg" alt=""></a></div>
                            <figcaption class="gallery-caption">The Deep Surface</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio end-->

<!-- Related Work-->
<section class="module module-divider-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-title c-align">
                    <h2>Related Work</h2>
                    <h6>An eye for detail makes our works excellent</h6>
                </div>
            </div>
        </div>
        <div class="row row-portfolio">
            <div class="grid-sizer"></div>
            <div class="portfolio-item js-tilt web design ">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-1.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Hilltop</h5>
                        <h6 class="portfolio-subtitle">Design</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
            <div class="portfolio-item js-tilt photo web ">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-4.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Popcorn</h5>
                        <h6 class="portfolio-subtitle">Design</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
            <div class="portfolio-item js-tilt design branding ">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-3.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Color</h5>
                        <h6 class="portfolio-subtitle">Design</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
        </div>
    </div>
</section>
<!-- Related Work end-->
@endsection