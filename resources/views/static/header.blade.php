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
                <li class="{{ strpos(Request::path(), '/') !== false ? 'active' : '' }}"><a href="{{ Route('index') }}">Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Categorieën <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            @foreach ($cat_list as $cat_item)
                                <a href="{{url('/category')}}{{'/'.strtolower($cat_item->name)}}">{{$cat_item->name}}</a>
                                  @foreach ($subcat_list as $subcat_item)
                                    <a href="{{url('/category')}}{{'/'.strtolower($subcat_item->name)}}">{{$subcat_item->name}}</a>
                                  @endforeach
                            @endforeach
                        </li>
                    </ul>
                </li>

                <li class="{{ strpos(Request::path(), 'contact') !== false ? 'active' : '' }}"><a href="{{ Route('contact') }}">Contact</a></li>
                <li class="{{ strpos(Request::path(), 'about') !== false ? 'active' : '' }}"><a href="{{ Route('about') }}">Over ons</a></li>
                {{ Form::open(array('route' => 'search_products', 'method' => 'post', 'class' => 'navbar-form navbar-right')) }}
                    {!! Form::text('search', '', array('class' => 'form-control', ' placeholder' => 'Zoeken..')) !!}
                {{ Form::close() }}
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
                                @if(Auth::user()->admin == 1)
                                <a href="{{ route('dashboard') }}">
                                    Dashboard
                                </a>
                                @endif
                                <a href="{{ route('profiel') }}">
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
                            <a href="{{ route('winkelwagen') }}">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
