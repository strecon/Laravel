<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                <li class="navbar-li active"><a href="{{ route('home') }}">{{__('labels.menu_home')}}</a></li>
                <li class="navbar-li"><a href="{{ route('about') }}">{{__('labels.menu_about')}}</a></li>
                <li class="navbar-li"><a href="{{ route('news::categories') }}">{{__('labels.menu_news')}}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <!-- Simple Admin Authorisation ..yet.. --start-->
                    @if(Auth::user()->is_admin)
{{--                        @if(Auth::user()->name == 'Admin')--}}
                        <li class="nav-link"><a href="{{ route('admin::panel') }}">{{__('labels.menu_admin')}}</a></li>
                    @else
                        <li class="nav-link"><a href="#">{{Auth::user()->name}}</a></li>
                    @endif

                <!-- Simple Admin Authorisation --end -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    <ul class="nav">
        <li><a class="dropdown-item" href="{{route('changeLocale', ['locale' => 'en'])}}">en</a></li>
        <li><a class="dropdown-item" href="{{route('changeLocale', ['locale' => 'ru'])}}">ru</a></li>
    </ul>
</nav>
