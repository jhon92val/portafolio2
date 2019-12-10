@extends('layouts.layout-admin')

@section('titulo')
    Eliminar Imagen    
@endsection

@section('contenido')

	<!--<section class="module-page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-8">
        			<img class="" width="500" src="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}" alt="" style=""></div>
				</div>
				<div class="d-flex justify-content-between col-md-8 mt-5">
				<a class="btn btn-outline btn-sm btn-brand" href="{{url("trabajos/{$imagen->trabajo_id}")}}"><span>Regresar</span></a>
					<button class="btn btn-sm btn-brand"><span>Borrar</span></button>
				</div>
			</div>
		</div>
	</section>-->
	
	<section class="module">
			<div class="container mb-5" style="margin-top:80px">
				<div class="row">
					<div class="col-md-8">
						<div class="portfolio-content">
							<div class="gallery">
								<figure class="gallery-item">
									<div class="gallery-icon"><a href="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}" title="Ver imagen" rel="gallery"><img src="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}" alt=""></a></div>
									<figcaption class="gallery-caption">Tamaño: {{$imagen->size}} Bytes</figcaption>
								</figure>
								<div class="d-flex justify-content-between col-md-12 mt-5">
									
										<a class="btn btn-outline btn-sm btn-brand" href="{{url("trabajos/{$imagen->trabajo_id}")}}"><span>Regresar</span></a>
										<form method="DELETE" action= "{{action('ImagenController@destroy',$imagen->id)}}" class="">
												
												@method('delete')
										<input type="submit" class="btn btn-sm btn-brand" value="Borrar">
									</form>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
       
@endsection