@foreach(config('db.explore_topics') as $item)
<div class="section_title">
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['desc'] }}</p>
</div>
<!-- /.section_title -->

<div class="explore_topics_grid d_g">
    @foreach($item['info'] as $index=>$serie)<div class="topic_card d_f align_items_center">
        <div class="d_f align_items_center">
            <img src="{{$serie['thumb']}}" alt="{{$serie['name']}}">
            <div>
                <h5>{{$serie['name']}}</h5>
                <div class="d_f align_items_center">
                    <span>{{$serie['series']}} Series</span>
                    <span class="dot"> • </span>
                    <span>{{$serie['videos']}} Video</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.topic_card -->
    @endforeach
</div>
<!-- /.explore_topics_grid -->
@endforeach