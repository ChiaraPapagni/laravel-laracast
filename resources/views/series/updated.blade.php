@foreach($series['updated'] as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->


@foreach($item['info'] as $index=>$serie)
<div class="card bg_white">
    <span class="d_f">
        <div class="large">
            <div class="col">
                @if($serie['type'] === 'frameworks')
                <a href="" class="type bg_red">{{ $serie['type'] }}</a>
                @elseif($serie['type'] === 'tooling')
                <a href="" class="type bg_purple">{{ $serie['type'] }}</a>
                @elseif($serie['type'] === 'languages')
                <a href="" class="type bg_yellow">{{ $serie['type'] }}</a>
                @elseif($serie['type'] === 'techniques')
                <a href="" class="type bg_blue">{{ $serie['type'] }}</a>
                @elseif($serie['type'] === 'testing')
                <a href="" class="type bg_green">{{ $serie['type'] }}</a>
                @endif
                <!-- /.type -->

                <a class="name" href="{{route('serie', ['id' => $index])}}">{{ $serie['name'] }}</a>
                <!-- /.name -->

                <p class="text clamp">{{ $serie['text'] }}</p>
                <!-- /.text -->

                <div class="more_info d_f">
                    <div class="difficulty d_f">
                        <div class="lines">
                            <p class="block"></p>
                            <p class="block"></p>
                            <p class="block"></p>
                        </div>
                        <span>{{ $serie['difficulty'] }} <br> Difficulty</span>
                    </div>
                    <div class="episodes d_f">
                        <img src="{{asset('img/books.svg')}}">
                        <span><a href="">{{ $serie['episodes'] }} Lessons</a></span>
                    </div>
                    <div class="duration d_f">
                        <img src="{{asset('img/time.svg')}}">
                        <span>{{ $serie['duration'] }}</span>
                    </div>
                </div>
                <!-- /.info -->
            </div>
            <!-- /.col -->

            <div class="start">
                <a href="">
                    <img src="{{asset('img/play.svg')}}">
                    <span>Start Series</span>
                </a>
            </div>
            <!-- /.start -->
        </div>

        <div class="thumb">
            <img src="{{ $serie['thumbnail'] }}" alt="{{ $serie['name'] }}">
        </div>
        <!-- /.thumb -->
    </span>
</div>
@endforeach
@endforeach

<div class="more">
    @foreach(config('db.series.more_updated') as $item)
    <div class="card bg_dark_blue_gradient">
        <h4>{{ $item['title'] }}</h4>
        <div class="grid d_g">
            @foreach($item['info'] as $serie)
            <div class="cell">
                <img src="{{ $serie['thumb'] }}" alt="{{ $serie['name'] }}">
                <h5 class="clamp">{{ $serie['name'] }}</h5>
                <h6>{{ $serie['date'] }}</h6>
                <p class="hide clamp">{{ $serie['text'] }}</p>
                <a href="" class="start_series">Start Series</a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- /.section_bg -->
    @endforeach
</div>
<!-- /.more -->