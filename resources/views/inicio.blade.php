@extends('layouts.layout')

@section('titulo')
    Visual Artist
@endsection

@section('cabecera')
<!-- Banner-->
<section class="module-header full-height parallax bg-dark bg-dark-30 text-left" id="home" data-background="{{asset('assets/images/module-9.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 m-b-15">Jesús <br/> Konde</h1>
                <div id="typed-strings"><span>Graphic Designer</span><span>Visual Artist</span></div>
                <h1 class="h6"><span id="typed"></span></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner-->    
@endsection

@section('contenido')

<!-- Profile-->
<section class="module" id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-title c-align">
                    <h2>Jesús Konde</h2>
                    <h6>Graphic Designer & Visual Artist</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p><img src="assets/images/im.jpg" alt=""></p>
            </div>
            <div class="col-md-4">
                <h5>Perfil Profesional</h5>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest. Map where your photos.</p>
                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest. Map where your photos.</p>
            </div>
            <div class="col-md-4">
                <h5>Mis habilidades</h5>
                <div class="progress-item">
                    <div class="progress-title">Gulp</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-brand" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-title">UX Design</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-brand" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-title">HTML / CSS3 / SASS</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-brand" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-title">Gulp</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-brand" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile end-->



<!-- Resume-->
<section class="module module-gray" id="resume">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-title c-align">
                    <h2>Resumen Profesional</h2>
                    <h6>Mi educación y Experiencia</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <div class="timeline-preview"><img src="assets/images/features/1.jpg" alt=""></div>
                            <div class="timeline-body">
                                <h5 class="timeline-title">Computer science</h5>
                                <h6 class="timeline-description">Stanford University | 1998 - 2004</h6>
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <div class="timeline-preview"><img src="assets/images/features/2.jpg" alt=""></div>
                            <div class="timeline-body">
                                <h5 class="timeline-title">Visual designer</h5>
                                <h6 class="timeline-description">Stanford University | 2004 - 2008</h6>
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <div class="timeline-preview"><img src="assets/images/features/3.jpg" alt=""></div>
                            <div class="timeline-body">
                                <h5 class="timeline-title">Frontend-developer</h5>
                                <h6 class="timeline-description">Design Corporation | 2008 - 2012</h6>
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <div class="timeline-preview"><img src="assets/images/features/4.jpg" alt=""></div>
                            <div class="timeline-body">
                                <h5 class="timeline-title">Lead Developer</h5>
                                <h6 class="timeline-description">Creative Design Studio | 2012 - 2017</h6>
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
                            </div>
                        </div>
                    </li>
                    <div class="timeline-top"></div>
                </ul>
                <div class="text-center"><a class="btn btn-lg btn-gray" href="#"><span>Descargar</span></a></div>
            </div>
        </div>
    </div>
</section>
<!-- Resume end-->

<!-- Clients and Testimonials-->
<section class="module module-dark">
    <div class="container">

        <!-- Clients-->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel clients-carousel">
                    <div class="client"><a href="#"><img src="assets/images/clients/logo-1.png" alt=""></a></div>
                    <div class="client"><a href="#"><img src="assets/images/clients/logo-2.png" alt=""></a></div>
                    <div class="client"><a href="#"><img src="assets/images/clients/logo-3.png" alt=""></a></div>
                    <div class="client"><a href="#"><img src="assets/images/clients/logo-4.png" alt=""></a></div>
                </div>
            </div>
        </div>
        <!-- Clients end-->

        <!-- Testimonials-->
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="spacer m-t-140"></div>
                <div class="tms-slides owl-carousel" data-carousel-options="{&quot;autoPlay&quot;: &quot;5000&quot;}">
                    <div class="tms-item">
                        <div class="tms-icons">
                            <h2 class="icon-chat"></h2>
                        </div>
                        <div class="tms-content">
                            <blockquote>
                                <p>If you want to know what a man's like, take a good look at how he treats his inferiors, not his equals.</p>
                            </blockquote>
                        </div>
                        <div class="tms-author">
                            <h6>J.K. Rowling</h6>
                        </div>
                    </div>
                    <div class="tms-item">
                        <div class="tms-icons">
                            <h2 class="icon-chat"></h2>
                        </div>
                        <div class="tms-content">
                            <blockquote>
                                <p>To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</p>
                            </blockquote>
                        </div>
                        <div class="tms-author">
                            <h6>Ralph Waldo Emerson</h6>
                        </div>
                    </div>
                    <div class="tms-item">
                        <div class="tms-icons">
                            <h2 class="icon-chat"></h2>
                        </div>
                        <div class="tms-content">
                            <blockquote>
                                <p>Imperfection is beauty, madness is genius and it's better to be absolutely ridiculous than absolutely boring.</p>
                            </blockquote>
                        </div>
                        <div class="tms-author">
                            <h6>Marilyn Monroe</h6>
                        </div>
                    </div>
                </div>
                <div class="spacer m-b-140"></div>
            </div>
        </div>
        <!-- Testimonials end-->

    </div>
</section>
<!-- Clients and Testimonials end-->

{{--@include('layouts.post-seccion')--}}
    
@endsection