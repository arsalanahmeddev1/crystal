@extends('web/layouts.app')
@section('title', 'About')

@section('content')
<section class="about-banner inner-banner bg-center">
    <div class="container">
        <h1 class="">about</h1>
    </div>
</section>
@include('web.partials.training')
@include('web/partials.achievement')
@include('web/partials.video-sec')
@include('web/partials.blogs')

@endsection