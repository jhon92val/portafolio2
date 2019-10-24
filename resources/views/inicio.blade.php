@extends('layouts.layout')

@section('titulo')
    Visual Artist
@endsection

@section('banner')
<!-- Banner-->
<section class="module-header full-height parallax bg-dark bg-dark-30 text-left" id="home" data-background="{{asset('assets/images/module-9.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 m-b-15">Daniel <br/> Raleway</h1>
                <div id="typed-strings"><span>Visual designer</span><span>Front-end developer</span></div>
                <h1 class="h6"><span id="typed"></span></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner-->    
@endsection