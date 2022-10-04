@php
$menu = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop']
@endphp
<header class="d-flex container">
    <div class="first">
        <a href="{{route('home')}}">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC Logo">
        </a>
    </div>
    <nav class="second nav-bar">
        <ul class="menu">
            @for($i = 0; $i < count($menu); $i++)
                @if(Request::route()->getName() == $menu[$i])
                    <li class="menu-item">
                        <a href="{{route($menu[$i])}}" class="active">{{ucfirst($menu[$i])}}</a>
                    </li>
                @else
                    <li class="menu-item">
                        <a href="{{route($menu[$i])}}">{{ucfirst($menu[$i])}}</a>
                    </li>
                @endif
            @endfor
        </ul>
    </nav>      
</header>