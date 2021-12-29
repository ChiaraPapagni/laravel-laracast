@foreach(config('db.trending') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->


<div class="bg_dark_blue_gradient card">
    <div class="big_card d_f wrap trending flex_end">
        @foreach($item['info'] as $element)
        <a href="" class="d_f align_items_center">
            <div class="img">
                <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">
            </div>
            <div class="info">
                <h5>{{ $element['name'] }}</h5>
                <p>{{ $element['text'] }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
<!-- /.card -->
@endforeach