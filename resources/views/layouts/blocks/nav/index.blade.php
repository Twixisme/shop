<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Интернет магазин</a>
        </div>
        <div id="navbar" class="сollapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">@lang('users.nav1')</a></li>
                <li><a href="/categories" class=" @yield('categories')">@lang('users.nav4')</a></li>
                <li><a href="/" class=" @yield('about')">@lang('users.nav3')</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login')}}">Войти</a></li>
                    <li><a href="{{ route('register')}}">Зарегистрироватся</a></li>
                @endguest
                @auth
                    @if(Auth::user()->isAdmin())
                        <li><a href="{{ route('orders.index')}}">Панель администратора</a></li>
                    @else
                        <li><a href="{{ route('person.orders.index')}}">Мои заказы</a></li>
                    @endif
                    <li><a href="{{ route('log')}}">Выйти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
