@extends('layouts.layout-admin')

@section('titulo')
    Panel Administrador
@endsection

@section('contenido')
<section class="module-page-title">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Felicidades</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
