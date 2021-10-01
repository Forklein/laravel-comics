<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <p>DC POWER VISA ®</p>
                    <p>ADDITIONAL DC SITES</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/dc-logo.png')}}" alt="Logo">
            </div>
            <div class="col">
                <nav>
                    <ul class="d-flex">
                        @foreach($menus as $menu)
                            <li class="{{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <a href="{{ route($menu['route']) }}">{{$menu['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col">
                <input type="text">
            </div>
        </div>
    </div>
    <div class="jumbotron"></div>
</header>