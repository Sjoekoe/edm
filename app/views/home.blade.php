@extends('layouts.main')

@section('content')

@include('partials.jumbotron')

<div class="piece piece-light">
    <div class="container wrap">
        <h2 class="text-center">Re-create famous tracks together with world-class producers!</h2>
        @include('partials.series-overview')
    </div>
</div>
<div class="piece piece-dark">
    <div class="container text-center wrap">
        <h2>If you are just starting out, need some inspiration, of you are just curious how your favorite producer
            works, just sign up and learn everything you need to know!</h2>
    </div>
</div>

<div class="piece-light piece">
    @include('partials.testimonials')
</div>
@stop