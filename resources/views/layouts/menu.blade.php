<header class="header header-center">
    <div class="container-fluid">
        <!-- Brand-->
        <div class="inner-header"><a class="inner-brand" href="index.html"><img class="brand-dark" src="{{asset('assets/images/logo.png')}}" width="30px" alt=""><img class="brand-light" src="{{asset('assets/images/logo-light.png')}}" width="30px" alt=""></a></div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav onepage-nav">
                <ul>
                    <li><a href="{{url('/')}}"><span class="menu-item-span">Inicio</span></a></li>
                    <li><a href="{{url('/servicios')}}"><span class="menu-item-span">Servicios</span></a></li>
                    <li><a href="{{url('/portafolio')}}"><span class="menu-item-span">Portafolio</span></a></li>
                    <li id="contact-menu"><a href="#contact"><span class="menu-item-span">Contacto</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Mobile menu-->
        <div class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></div>
    </div>
</header>