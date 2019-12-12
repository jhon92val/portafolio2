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
										<!--<form method="DELETE" action= "{{action('ImagenController@destroy',$imagen->id)}}" class="">
												
												@method('delete')
										<input type="submit" class="btn btn-sm btn-brand" value="Borrar"></form>-->
										<a class="btn btn-brand" href="#" data-toggle="modal" data-target="#formdeleteadmin_{{$imagen->id}}" title="Clic para eliminar"><span>Eliminar</span></a>
									
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade bd-example-modal-lg" id="formdeleteadmin_{{$imagen->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">¿Eliminar esta imagen?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center">
							<p>Asegurese de eliminar la imagen correcta, luego no podrá recuperarla.</p>
							<img src="../storage/images/imagenes/{{$imagen->trabajo_id}}/{{$imagen->imagen}}" alt="" width="300">
						</div>
						
						<div class="modal-footer">
							<form method="DELETE" action= "{{action('ImagenController@destroy',$imagen->id)}}" class="">
								@csrf
								@method('delete')
							<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No, Volver.</button>
							<input type="submit" class="btn btn-sm btn-danger" value="Si, Eliminar">
							</form>
						</div>
						
					</div>
				</div>
			</div> 
		</section>
       
@endsection