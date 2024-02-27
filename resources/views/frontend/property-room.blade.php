@extends('frontend.layouts.app')
@section('content')
    <section class="latestPostsBlock container" style="margin-top: 40px">
        <!-- rowHead -->
        <header class="row rowHead">
            <div class="col-xs-12 col-sm-5">
                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">{{ $property->name }}</span> </h1>
            </div>
        </header>
        <!-- isoContentHolder -->
        <div class="">
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-xs-12 col-sm-6 col-md-4 col ">
                        <!-- postColumn -->
                        <article class="postColumn hasOver bgWhite">
                            <div class="aligncenter">
                                <!-- postColumnImageSlider -->
                                <div class="slickSlider postColumnImageSlider">
                                    <div>
                                        <div class="imgHolder">
                                            <a href="#">
                                                <img src="{{ imagePath('room', $room->image) }}" alt="{{ $room->name }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="fontNeuron text-capitalize">
                                <a href="#">{{ $room->name }}
                                </a>
                            </h2>
                            {{-- <address>
                                <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                <p>{{ $room->city }}, {{ $room->state }}, {{ $room->address }}</p>
                            </address> --}}
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
