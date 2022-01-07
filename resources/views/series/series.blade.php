@extends('layouts.app')

@section('page-title', 'Series')

@section('content')

<section>
    <div class="section">
        @include('series.updated')
    </div>
</section>
<!-- /.section (Recently Updated) -->

<section>
    <div class="section">
        @include('series.trending')
    </div>
</section>
<!-- /.section (Trending Series) -->

<section>
    <div class="section">
        @include('series.grow_tall')
    </div>
</section>
<!-- /.section (Grow TALL) -->


<section>
    <div class="section">
        @include('series.learn_laravel')
    </div>
</section>
<!-- /.section (Learn Laravel) -->

<section>
    <div class="section">
        @include('series.level_up')
    </div>
</section>
<!-- /.section (Level Up Your Testing) -->

<section>
    <div class="section">
        @include('series.tools')
    </div>
</section>
<!-- /.section (Learn a Tool) -->

<section>
    <div class="section">
        @include('series.build')
    </div>
</section>
<!-- /.section (Build an App) -->

<section>
    <div class="section">
        @include('series.featured')
    </div>
</section>
<!-- /.section (Currently Featured) -->

<section>
    <div class="section">
        @include('series.master')
    </div>
</section>
<!-- /.section (Master Your Code Editor) -->

<section>
    <div class="section">
        @include('series.learn_oop')
    </div>
</section>
<!-- /.section (Learn OOP) -->

<section>
    <div class="section">
        @include('series.whats_new')
    </div>
</section>
<!-- /.section (What's New in Laravel?) -->

<section>
    <div class="section">
        @include('series.new_to_laracast')
    </div>
</section>
<!-- /.section (New to Laracasts?) -->

<section>
    <div class="section">
        @include('series.explore_topics')
    </div>
</section>
<!-- /.section (Explore Topics) -->

@endsection