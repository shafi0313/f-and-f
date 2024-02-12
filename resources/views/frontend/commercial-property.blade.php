@extends('frontend.layouts.app')
@section('content')
    <section class="latestPostsBlock container" style="margin-top: 40px">
        <!-- rowHead -->
        <header class="row rowHead">
            <div class="col-xs-12 col-sm-5">
                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">COMMERCIAL</span> <span
                        class="textSecondary">PROPERTIES</span></h1>
            </div>
        </header>
        <!-- isoContentHolder -->
        <div class="">
            <div class="row">
                @foreach ($properties as $property)
                    <div class="col-xs-12 col-sm-6 col-md-4 col ">
                        <!-- postColumn -->
                        <article class="postColumn hasOver bgWhite">
                            <div class="aligncenter">
                                <!-- postColumnImageSlider -->
                                <div class="slick-carousel slickSlider postColumnImageSlider">
                                    <div>
                                        <div class="imgHolder">
                                            <a href="{{ route('property_details', $property->id) }}">
                                                <img src="{{ imagePath('property', $property->image) }}"
                                                    alt="{{ $property->name }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="fontNeuron text-capitalize">
                                <a href="{{ route('property_details', $property->id) }}">{{ $property->name }}
                                </a>
                            </h2>
                            <address>
                                <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                <p>{{ $property->city }}, {{ $property->state }}, {{ $property->address }}</p>
                            </address>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
