@extends('layouts.layout-admin')

@section('titulo')
    Crear {{$trabajo->titulo}}
@endsection

@section('contenido')
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

<section class="module">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                    <p><a class="btn btn-sm btn-brand" href="/home"><span>Regresar</span></a></p>
                </div>
                <div class="col-md-3">
                <p><a class="btn btn-outline btn-sm btn-brand" href="/imagenes/crear/{{$trabajo->id}}"><span>Subir Imagenes</span></a></p>
                </div>
               
            </div>
        </div>
    </section>

    
<!-- Portfolio Single
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
 Portfolio end-->


@endsection