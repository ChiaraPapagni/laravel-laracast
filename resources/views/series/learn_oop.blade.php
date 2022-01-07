@foreach($series['learn_oop'] as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

<div class="card bg_white">
    <div class="d_f">
        @foreach($item['info'] as $index=>$serie)
        @if($index === 0)
        <div class="double_card_left">
            <img src="{{ $serie['thumbnail'] }}" alt="{{ $serie['name'] }}">
            <!--/.thumbnail-->

            <div>
                <a class="name" href="#">{{ $serie['name'] }}</a>
                <!-- /.name -->

                <p class="text clamp">{{ $serie['text'] }}</p>
                <!-- /.text -->

                <div class="more_info d_f">
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
        </div>
        <!-- /.double_card_left -->
        @endif
        @endforeach

        <div class="double_card_center"></div>
        <!-- /.double_card_center -->

        @foreach($item['info'] as $index=>$serie)
        @if($index === 1)
        <div class="double_card_right">
            <img src="{{ $serie['thumbnail'] }}" alt="{{ $serie['name'] }}">
            <!--/.thumbnail-->

            <div>
                <a class="name" href="#">{{ $serie['name'] }}</a>
                <!-- /.name -->

                <p class="text clamp">{{ $serie['text'] }}</p>
                <!-- /.text -->

                <div class="more_info d_f">
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
        </div>
        <!-- /.double_card_right -->

        @endif
        @endforeach
    </div>
</div>
@endforeach