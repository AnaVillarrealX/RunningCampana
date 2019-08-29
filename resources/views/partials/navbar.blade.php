<body>
  <header class="encabezado">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-s">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Runners Campana') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <img class="d-block rounded-circle _tamaño"  src="{{asset('img/logo_runners.jpg')}}" alt="">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('faqs')}}">FAQ's</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('contactUS')}}">Contact</a>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                      @else
                        @if (Auth::user()->role == 7)
                          <li class="nav-item dropdown red">
                                <a class="dropdown-item" href="{{route('users.index')}}">Usuarios</a>
                                <a class="dropdown-item" href="{{route('goals.index')}}">Carreras</a>
                          </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ "Hola, ".Auth::user()->first_name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        <li class="">
                          <a href="" class="pull-right"><img class="avatar" src="{{asset('storage/avatars/'.Auth::user()->avatar)}}"></a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
  </header>
