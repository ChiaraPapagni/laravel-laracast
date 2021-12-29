@foreach(config('db.master') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

@foreach($item['info'] as $index=>$element)
@if($index === 0)
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
@endif
@endforeach


<div class="d_g" style="grid-template-columns: auto auto auto; column-gap: 2.5rem;">
    @foreach($item['info'] as $index=>$element)
    @if($index > 0)
    <div class="small_card bg_white d_f">
        @if($element['type'] === 'frameworks')
        <div class="left bg_red_gradient">
            @elseif($element['type'] === 'tooling')
            <div class="left bg_purple_gradient">
                @elseif($element['type'] === 'techniques')
                <div class="left bg_blue_gradient">
                    @elseif($element['type'] === 'languages')
                    <div class="left bg_yellow_gradient">
                        @else
                        <div class="left">
                            @endif

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

                            <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">

                            <div class="difficulty">
                                <p>
                                    {{ $element['difficulty'] }} <br> Difficulty
                                </p>
                                <div class="lines">
                                    @if( $element['difficulty'] === 'Beginner' )
                                    <span class="line line_white"></span>
                                    <span class="line line_black"></span>
                                    <span class="line line_black"></span>
                                    @elseif ( $element['difficulty'] === 'Intermediate' )
                                    <span class="line line_white"></span>
                                    <span class="line line_white"></span>
                                    <span class="line line_black"></span>
                                    @elseif ( $element['difficulty'] === 'Advanced' )
                                    <span class="line line_white"></span>
                                    <span class="line line_white"></span>
                                    <span class="line line_white"></span>
                                    @else
                                    <span class="line line_black"></span>
                                    <span class="line line_black"></span>
                                    <span class="line line_black"></span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <a class="name" href="#">{{ $element['name'] }}</a>
                            <p class="text">{{ $element['text'] }}</p>

                            <div class="more_info d_f">
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
                                    <span>Play</span>
                                </a>
                            </div>
                            <!-- /.start -->
                        </div>
                    </div>
                    <!-- /.small_card -->
                    @endif
                    @endforeach
                </div>
                @endforeach