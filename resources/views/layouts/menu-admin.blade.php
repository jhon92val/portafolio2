<header class="header header-center">
    <div class="container-fluid">
        <!-- Brand-->
        <div class="inner-header"><a class="inner-brand" href="index.html"><img class="brand-dark" src="{{asset('assets/images/logo.png')}}" width="30px" alt=""><img class="brand-light" src="{{asset('assets/images/logo-light.png')}}" width="30px" alt=""></a></div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav onepage-nav">
                <ul>
                    <li><a href="{{url('/crear')}}"><span class="menu-item-span">Nuevo</span></a></li>
                    <li><a href="{{url('/admin')}}"><span class="menu-item-span">Mis trabajos</span></a></li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            <span class="menu-item-span">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Cerrar Sesión') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            </li>
                        </ul>
                    </li>                        
                </ul>
            </div>
            
        </div>
        <!-- Mobile menu-->
        <div class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></div>
    </div>

   
</header>