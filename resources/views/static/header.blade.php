<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ config('app.name', 'DoggoFood') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ strpos(Request::path(), '/') !== false ? 'active' : '' }}"><a href="{{URL('/')}}">Home</a></li>
                <li class="{{ strpos(Request::path(), 'brokken') !== false ? 'active' : '' }}"><a href="{{URL('/brokken')}}">Brokken</a></li>
                <li class="{{ strpos(Request::path(), 'snacks') !== false ? 'active' : '' }}"><a href="{{URL('/snacks')}}">Snacks</a></li>
                <li class="{{ strpos(Request::path(), 'training') !== false ? 'active' : '' }}"><a href="{{URL('/training')}}">Training</a></li>
                <li class="{{ strpos(Request::path(), 'contact') !== false ? 'active' : '' }}"><a href="{{URL('/contact')}}">Contact</a></li>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Inloggen</a></li>
                    <li><a href="{{ route('register') }}">Registreren</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{URL('/profiel')}}">
                                    Mijn Profiel
                                </a>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        <li>
                            <a href="{{URL('/winkelwagen')}}">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
