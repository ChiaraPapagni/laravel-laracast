@foreach(config('db.learn_oop') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

<div class="card bg_white d_f">
    @foreach($item['info'] as $index=>$element)
    @if($index === 0)
    <div class="double_card_left">
        <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">
        <!--/.thumbnail-->

        <div>
            <a class="name" href="#">{{ $element['name'] }}</a>
            <!-- /.name -->

            <p class="text clamp">{{ $element['text'] }}</p>
            <!-- /.text -->

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
                    <span>Start Series</span>
                </a>
            </div>
            <!-- /.start -->
        </div>
    </div>
    <!-- /.double_card_left -->

    @elseif($index === 1)
    <div class="double_card_right">
        <img src="{{ $element['thumbnail'] }}" alt="{{ $element['name'] }}">
        <!--/.thumbnail-->

        <div>
            <a class="name" href="#">{{ $element['name'] }}</a>
            <!-- /.name -->

            <p class="text clamp">{{ $element['text'] }}</p>
            <!-- /.text -->

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
@endforeach