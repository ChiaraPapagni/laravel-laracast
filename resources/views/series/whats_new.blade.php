@foreach(config('db.news') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->


<div class="whats_new bg_red_dark_blue_gradient card">
    <img src="{{ asset('img/journey_frameworks.svg') }}" class="journey_frameworks">
    <div class="big_card d_f wrap flex_end">
        @foreach($item['info'] as $element)
        <a href="" class="d_f align_items_center">
            <div class="img">
                <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">
            </div>
            <div class="info">
                <h5 class="clamp">{{ $element['name'] }}</h5>
                <p class="clamp">{{ $element['text'] }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<!-- /.card -->
@endforeach