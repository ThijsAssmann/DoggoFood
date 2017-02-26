<nav class="navbar navbar-transparent navbar-absolute">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">DoggoFood</a>
      </div>

      <div class="collapse navbar-collapse" id="navigation-example">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="/">
              Home
            </a>
          </li>
          <li>
            <a href="#">
              Brokken
            </a>
          </li>
          <li>
            <a href="#">
              Snacks
            </a>
          </li>
          <li>
            <a href="#">
              Training
            </a>
          </li>
          <li>
            <a href="#">
              Contact
            </a>
          </li>
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
                          <a href="#">
                              <i class="material-icons">shopping_cart</i>
                              Winkelwagen
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
              </li>
          @endif
       </ul>
      </div>
  </div>
</nav>
