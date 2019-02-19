<nav class="navbar navbar-expand-md navbar-light navbar-laravel">

    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">

            {{ config('app.name', 'Laravel') }}

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav mr-auto">

                

            </ul>

            &nbsp;&ensp; &ensp; &ensp; &ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;&ensp; &nbsp;

            <ul class="navbar-nav mr-auto">

                    <li>

                      <a class="nav-link" href="/">Naslovna <span class="sr-only">(current)</span></a>

                    </li>

                    <li class="nav-item">
                            @auth
                            @if(Auth::user()->type == 'admin' ||Auth::user()->type == 'normal_user')
                      <a class="nav-link" href="/upload">Izrada</a>
                            @endif
                            @endauth
                    </li>

                    <li class="nav-item">
                     
                      <a class="nav-link disabled" href="/services">Usluge</a>
                   
                    </li>

                    <li class="nav-item">

                      <a class="nav-link disabled" href="/posts">Recenzije</a>

                    </li>

                    <li class="nav-item">
                        @auth
                        @if(Auth::user()->type == 'admin' ||Auth::user()->type == 'normal_user')
                        <a class="nav-link disabled" href="/posts/create">Napiši recenziju</a>
                        @endif
                        @endauth
                    </li>
                    <li class="nav-item">
                            @auth
                            @if(Auth::user()->type == 'admin' ||Auth::user()->type == 'normal_user')
                            <a class="nav-link disabled" href="/image-gallery">Kolaž fotografija</a>
                            @endif
                            @endauth
                          </li>
                    
                  </ul>



            <!-- Right Side Of Navbar -->

            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->

                @guest

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a>

                    </li>

                @else

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            {{ Auth::user()->name }} <span class="caret"></span>

                        </a>



                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"

                               onclick="event.preventDefault();

                                             document.getElementById('logout-form').submit();">

                                {{ __('Odjava') }}

                                <a class="dropdown-item" href="/home">Naslovna</a>

                            </a>

                        



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                @csrf

                            </form>

                        </div>

                    </li>

                @endguest

            </ul>

        </div>

    </div>

</nav>