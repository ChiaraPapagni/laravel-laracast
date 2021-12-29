<header id="site_header">
    <nav class="container d_f">
        <img src="{{asset('img/logo.svg')}}" alt="Laracast Logo">
        <div class="center">
            <ul>
                @foreach(config('db.header_menu') as $item)
                <li>
                    @if($item['text'] === 'larabits')
                    <a href="#" class="{{ Route::currentRouteName() === 'larabits' ? 'larabit' : '' }} larabit_new">
                        {{ $item['text'] }}
                        <span class="new">New!</span>
                    </a>
                    @else
                    <a href="#" class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">
                        {{ $item['text'] }}
                    </a>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
        <div class="right d_f">
            <img src="{{asset('img/search.svg')}}">
            <a href="#">Sign in</a>
            <a href="#" class="get_started">Get started</a>
        </div>
    </nav>
</header>
<!-- /#site_header -->