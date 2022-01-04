@foreach($series['trending'] as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->


<div class="trending bg_dark_blue_gradient card">
    <img src="{{ asset('img/bot.svg') }}" class="lary_trending">
    <div class="big_card d_f wrap flex_end">
        @foreach($item['info'] as $serie)
        <a href="" class="d_f align_items_center">
            <div class="img">
                <img src="{{ $serie['thumbnail'] }}" alt="{{ $serie['name'] }}">
            </div>
            <div class="info">
                <h5 class="clamp">{{ $serie['name'] }}</h5>
                <p class="clamp">{{ $serie['text'] }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<!-- /.card -->
@endforeach