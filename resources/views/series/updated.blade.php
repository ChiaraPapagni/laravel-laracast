@foreach(config('db.updated') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

@foreach($item['info'] as $element)
<div class="card bg_white">
    <div class="col">
        @if($element['type'] === 'frameworks')
        <a href="" class="type bg_red">{{ $element['type'] }}</a>
        @elseif($element['type'] === 'tooling')
        <a href="" class="type bg_purple">{{ $element['type'] }}</a>
        @elseif($element['type'] === 'languages')
        <a href="" class="type bg_yellow">{{ $element['type'] }}</a>
        @elseif($element['type'] === 'techniques')
        <a href="" class="type bg_blue">{{ $element['type'] }}</a>
        @elseif($element['type'] === 'testing')
        <a href="" class="type bg_green">{{ $element['type'] }}</a>
        @endif
        <!-- /.type -->

        <a class="name" href="#">{{ $element['name'] }}</a>
        <!-- /.name -->

        <p class="text clamp">{{ $element['text'] }}</p>
        <!-- /.text -->

        <div class="more_info d_f">
            <div class="difficulty d_f">
                <div class="lines">
                    <p class="block"></p>
                    <p class="block"></p>
                    <p class="block"></p>
                </div>
                <span>{{ $element['difficulty'] }} <br> Difficulty</span>
            </div>
            <div class="episodes d_f">
                <img src="{{asset('img/books.svg')}}">
                <span><a href="">{{ $element['episodes'] }} Lessons</a></span>
            </div>
            <div class="duration d_f">
                <img src="{{asset('img/time.svg')}}">
                <span>{{ $element['duration'] }}</span>
            </div>
        </div>
        <!-- /.info -->

        <div class="start">
            <a href="">
                <img src="{{asset('img/play.svg')}}">
                <span>Start Series</span>
            </a>
        </div>
        <!-- /.start -->
    </div>
    <!-- /.col -->

    <div class="thumb">
        <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">
    </div>
    <!-- /.thumb -->
</div>
@endforeach
@endforeach

<div class="more">
    @foreach(config('db.more_updated') as $item)
    <div class="card bg_dark_blue_gradient">
        <h4>{{ $item['title'] }}</h4>
        <div class="grid d_g">
            @foreach($item['info'] as $element)
            <div class="cell">
                <img src="{{ $element['thumb'] }}" alt="{{ $element['name'] }}">
                <h5 class="clamp">{{ $element['name'] }}</h5>
                <h6>{{ $element['date'] }}</h6>
                <p class="hide clamp">{{ $element['text'] }}</p>
                <a href="" class="start_series">Start Series</a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- /.section_bg -->
    @endforeach
</div>
<!-- /.more -->