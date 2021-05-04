<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
            <ul class="nav navbar-nav">
                <li class="navbar-li active"><a href="{{ route('root') }}">{{__('labels.menu_home')}}</a></li>
               <li class="navbar-li"><a href="{{ route('about') }}">{{__('labels.menu_about')}}</a></li>
                <li class="navbar-li"><a href="{{ route('news::categories') }}">{{__('labels.menu_news')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-li"><a href="{{ route('auth') }}">{{__('labels.menu_signIn')}}</a></li>
                <li class="navbar-li"><a href="{{ route('admin::panel') }}">{{__('labels.menu_admin')}}</a></li>
            </ul>
    </div>
    <ul class="nav">
        <a class="dropdown-item" href="{{route('locale', ['locale' => 'en'])}}">en</a>
        <a class="dropdown-item" href="{{route('locale', ['locale' => 'ru'])}}">ru</a>
    </ul>
</nav>
