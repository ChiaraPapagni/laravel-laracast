@extends('layouts.app')

@section('page-title', 'Series')

@section('content')


<div class="section">
    @include('series.updated')
</div>
<!-- /.section (Recently Updated) -->

<div class="section">
    @include('series.trending')
</div>
<!-- /.section (Trending Series) -->

<div class="section">
    @include('series.grow_tall')
</div>
<!-- /.section (Grow TALL) -->

<div class="section">
    @include('series.learn_laravel')
</div>
<!-- /.section (Learn Laravel) -->

<div class="section">
    @include('series.level_up')
</div>
<!-- /.section (Level Up Your Testing) -->

<div class="section">
    @include('series.tools')
</div>
<!-- /.section (Learn a Tool) -->

<div class="section">
    @include('series.build')
</div>
<!-- /.section (Build an App) -->

<div class="section">
    @include('series.featured')
</div>
<!-- /.section (Currently Featured) -->

<div class="section">
    @include('series.master')
</div>
<!-- /.section (Master Your Code Editor) -->

<div class="section">
    @include('series.learn_oop')
</div>
<!-- /.section (Learn OOP) -->

<div class="section">
    @include('series.whats_new')
</div>
<!-- /.section (What's New in Laravel?) -->

<div class="section">
    @include('series.new_to_laracast')
</div>
<!-- /.section (New to Laracasts?) -->

<!-- /.section (Explore Topics) -->

@endsection