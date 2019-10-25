@extends('layouts.layout')

@section('titulo')
    Portafolio    
@endsection

@section('cabecera')
<section class="module-header full-height parallax bg-dark bg-dark-30" id="home" data-background="assets/images/module-10.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 m-b-15">Portafolio</h1>
                <h1 class="h6"><span class="rotate">Visual designer | Front-end developer</span></h1>
            </div>
        </div>
    </div>
</section>
@endsection

@section('contenido')
<!-- Portfolio-->
<section class="module p-b-0" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-title c-align">
                    <h2>My Portfolio</h2>
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
            <div class="portfolio-item js-tilt branding photo large">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-5.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Raleway</h5>
                        <h6 class="portfolio-subtitle">Branding</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
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
            <div class="portfolio-item js-tilt design photo ">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-2.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Bicycles</h5>
                        <h6 class="portfolio-subtitle">Design</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
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
            <div class="portfolio-item js-tilt design branding">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-3.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Color</h5>
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
            <div class="portfolio-item js-tilt design photo ">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-2.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Bicycles</h5>
                        <h6 class="portfolio-subtitle">Design</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
            <div class="portfolio-item js-tilt branding">
                <div class="portfolio-wrapper">
                    <div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-5.jpg"></div>
                    <div class="portfolio-overlay"></div>
                    <div class="portfolio-caption">
                        <h5 class="portfolio-title">Raleway</h5>
                        <h6 class="portfolio-subtitle">Branding</h6>
                    </div>
                </div><a class="portfolio-link" href="portfolio-single-1.html"></a>
            </div>
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
        </div>
    </div>
</section>
<!-- Portfolio end-->   
<hr>
@endsection