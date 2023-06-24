<div class="container-card">
    <ul class="list-card">
        @php
            $comics = config('comics');
        @endphp
        @foreach ($comics as $item)
            <li>
                <img src="{{ $item['thumb'] }}" alt="">
                <a href="">{{ $item['series'] }}</a>
            </li>
        @endforeach
    </ul>
    <div class="btn">
        <a>LOAD MORE</a>
    </div>
</div>
<div class="content-down">
    <ul>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
            <a href="#">DIGITAL COMICS</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
            <a href="#">DC MERCHANDISE</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
            <a href="#">SUBSCRIPTION</a>
        </li>
        <li>
            <img class="location" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
            <a href="#">COMIC SHOP LOCATOR</a>
        </li>
        <li>
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
            <a href="#">DC POWER VISA</a>
        </li>
    </ul>
</div>