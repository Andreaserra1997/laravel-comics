<div class="container-card">
    <ul class="list-card">
        @php
            $comics = config('comics');
        @endphp
        @foreach ($comics as $item)
            <li>
                <img src="{{ Vite::asset('resources/img/'.$item['thumb']) }}" alt="">
                <a href="">{{ $item['series'] }}</a>
            </li>
        @endforeach
    </ul>
</div>