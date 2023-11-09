<nav class="navbar navbar-expand-lg navbar-danger bg-danger navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="/home" style="color:#ffffff"><span style="font-size:20pt">&#9820;</span> PeliculasFestSV</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link"  style="color:#ffffff" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('catalog/listar') ? 'active' : ''}}">
                        <a class="nav-link" style="color:#ffffff" href="{{url('/catalog/listar')}}">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                        Listar Películas
                            </a>
                       </li>

                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" style="color:#ffffff" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Nueva película
                        </a>
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0" action="{{ route('peliculas.buscar') }}" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="query" placeholder="Buscar películas" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="color:#ffffff" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                    
                </ul>
            </div>
        @endif
    </div>
</nav>
