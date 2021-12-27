<header id="site_header">
    <nav class="container d_f">
        <img src="{{asset('img/logo.svg')}}" alt="Laracast Logo">
        <div class="center">
            <ul>
                @foreach(config('db.header_menu') as $item)
                <li>
                    <a href="#" class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">
                        {{ $item['text'] }}
                    </a>
                </li>
                <!-- <li><a href="#">Topics</a></li>
                <li><a href="#" class="active">Series</a></li>
                <li><a href="#">Larabits</a></li>
                <li><a href="#">Discussions</a></li>
                <li><a href="#">Podcast</a></li> -->
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