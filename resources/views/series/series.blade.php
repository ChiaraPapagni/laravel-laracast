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
    @include('series.build')
</div>
<!-- /.section (Build an App) -->

<!-- /.section (Level Up Your Testing) -->

<div class="section">
    @include('series.featured')
</div>
<!-- /.section (Currently Featured) -->

<!-- /.section (New to Laracasts?) -->

<!-- /.section (Grow TALL) -->

<div class="section">
    @include('series.master')
</div>
<!-- /.section (Master Your Code Editor) -->

<!-- /.section (Learn Laravel) -->

<!-- /.section (Learn a Tool) -->

<!-- /.section (What's New in Laravel?) -->

<!-- /.section (Learn OOP) -->

<!-- /.section (Explore Topics) -->

@endsection