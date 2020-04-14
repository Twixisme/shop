<nav class="bg-dark navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="content">
                        <div class=" d-flex">
                            <ul class="nav__list d-flex text-uppercase">
                                <a href="/">@lang('users.nav1')</a>
                                <a class=" @yield('categories')" href="/categories">@lang('users.nav4')</a>
                                <a class=" @yield('about')" href="/categories">@lang('users.nav3')</a>
                            </ul>
                            <ul class="nav d-flex ">
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
                </div>
            </div>
        </nav>
    </div>
</div>
