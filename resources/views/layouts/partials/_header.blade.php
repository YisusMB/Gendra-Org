<!-- Header section  -->
    <header class="header-section">
        <div class="container">     
            <!-- logo -->
            <h3 ><a href="/"><img src="{{ asset('img/logo.png') }}" style="max-height: 35px;"></a>
            <!--<a href="" class="site-btn hidden-xs">send donation</a>-->
            <!-- nav menu -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
<!-----------------------------------------------MAIN MENU------------------------------------------------------------>         
            <nav class="main-menu" >
                <ul >
                    <li class="active"><a href="/">Inicio</a></li>
                    <li><a href="/nosotros">Nosotros</a></li>
                    <li><a href="/proyectos">Proyectos</a></li>
                <!--    <li><a href="event.html">Event</a></li> -->
                    <li><a href="/cursos">Cursos</a></li>
                    @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('courses.index') }}">{{ __('Cursos') }}</a>
                                    <a class="dropdown-item" href="{{ route('profiles.index') }}">{{ __('Perfiles') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </nav>
            </h3>
<!-----------------------------------------------END OF MAIN MENU------------------------------------------------------------>
        </div>
    </header>
    <!-- Header section end -->