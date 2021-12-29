@foreach(config('db.featured') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

@foreach($item['info'] as $element)
<div class="section_info">
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

            <p class="text">{{ $element['text'] }}</p>
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
</div>
<!-- /.section_info -->
@endforeach
@endforeach