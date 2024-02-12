@extends('frontend.layouts.app')
@section('content')
    <section class="latestPostsBlock container" style="margin-top: 40px">
        <!-- rowHead -->
        <header class="row rowHead">
            <div class="col-xs-12 col-sm-5">
                <h1 class="fontNeuron blockH text-uppercase">
                    <span class="bdrBottom">CONTACT</span>
                    <span class="textSecondary">US</span>
                </h1>
            </div>
        </header>
        <!-- isoContentHolder -->
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    {!! $about->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
