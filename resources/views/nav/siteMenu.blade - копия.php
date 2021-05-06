<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
            <ul class="nav navbar-nav">
                <li class="navbar-li active"><a href="{{ route('home') }}">{{__('labels.menu_home')}}</a></li>
               <li class="navbar-li"><a href="{{ route('about') }}">{{__('labels.menu_about')}}</a></li>
                <li class="navbar-li"><a href="{{ route('news::categories') }}">{{__('labels.menu_news')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
{{--                <li class="navbar-li"><a href="{{ route('auth') }}">{{__('labels.menu_signIn')}}</a></li>--}}
{{--                <li class="navbar-li"><a href="{{ route('admin::panel') }}">{{__('labels.menu_admin')}}</a></li>--}}
            </ul>
    </div>
    <ul class="nav">
        <li><a class="dropdown-item" href="{{route('changeLocale', ['locale' => 'en'])}}">en</a></li>
        <li><a class="dropdown-item" href="{{route('changeLocale', ['locale' => 'ru'])}}">ru</a></li>
    </ul>
</nav>
