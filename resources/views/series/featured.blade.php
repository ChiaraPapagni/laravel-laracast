@foreach($series['featured'] as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

@foreach($item['info'] as $serie)
<div class="section_info">
    <div class="card bg_white">
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

            <a class="name" href="#">{{ $serie['name'] }}</a>
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
            <img src="{{ $serie['thumbnail'] }}" alt="{{ $serie['name'] }}">
        </div>
        <!-- /.thumb -->
    </div>
</div>
<!-- /.section_info -->
@endforeach
@endforeach