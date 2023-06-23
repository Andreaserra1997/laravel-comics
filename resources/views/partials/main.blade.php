<div class="container-card">
    <ul class="list-card">
        @php
            $card = config('card');
        @endphp
        @foreach ($card as $item)
        <img src="{{ $item['thumb'] }}" alt="">
            <li><a href="">{{ $item['series'] }}</a></li>
        @endforeach
    </ul>
</div>