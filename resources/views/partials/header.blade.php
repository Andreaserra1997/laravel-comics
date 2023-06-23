<header>
    <div class="content-header">
        <img src="{{ Vite::asset('../resources/img/dc-logo.png') }}" alt="">
        <ul class="list-header-link">
            @php
                $menu = config('menu');
            @endphp
            @foreach ($menu as $item)
                <li><a href="">{{ $item['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="jumbo"></div>
</header>