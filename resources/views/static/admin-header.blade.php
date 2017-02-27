<nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">Home</a></li>
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
