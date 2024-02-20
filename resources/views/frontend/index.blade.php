@extends('frontend.layouts.app')
@section('content')
    <!-- introSlider -->
    <section class="slick-fade slickSlider introSlider">
        @foreach ($sliders as $slider)
            <div>
                <article class="introSlide bgCover" style="background: url({{ imagePath('slider', $slider->image) }});">
                    <div class="container introSlideHolder">
                    </div>
                </article>
            </div>
        @endforeach
    </section>

    <!-- mostPostsBlock -->
    <section class="mostPostsBlock bgWhite">
        <div class="container">
            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">F and F Property</span> <span
                    class="textSecondary">Maintenance</span></h1>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">F and F Property Maintenance developing properties and renting residential and
                        commercial properties
                        in WA market. We promised to provide competitive renting price with the best professional service.
                        We also mange other's properties such as property maintenance and repairs(plumbing, electrical,
                        gardening, cleaning etc.), tenant communication and correspondence, attending to your accounting
                        needs by our certified professional suppliers with competitive price.</p>
                </div>
            </div>
            <div class="row property" style="margin-top: 10px">
                <div class="col-md-4">
                    <img src="{{ imagePath('property', 'residensitial-property.jpg') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h4>Residential Property</h4>
                    <p>Our management services include the coordination of property maintenance and repairs, tenant
                        communication and correspondence, attending to your accounting needs in virtually any manner you
                        prefer</p>
                    <a href="{{ route('properties') }}" class="btn btn-primary">More</a>
                </div>
            </div>
            <div class="row property" style="margin-top: 10px">
                <div class="col-md-4">
                    <img src="{{ imagePath('property', 'office.jpg') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h4>Commercial Property</h4>
                    <p>Property owners have legitimate concerns about how property management companies operate, how fees
                        are structured and what value and benefits they can receive by contracting with them.</p>
                    <a href="{{ route('commercial_property') }}" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- servicesFetaureBlock -->
    <section class="servicesFetaureBlock container">
        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                class="textSecondary">SERVICE</span></h1>
        <!-- servicesFetauresList -->
        <ul class="servicesFetauresList list-unstyled text-center">
            @foreach ($services as $service)
                <li>
                    <a href="#">
                        <span class="icnHolder roundedCircle">
                            <img src="{{ imagePath('service', $service->image) }}" width="70px">
                        </span>
                        <h2 class="fontNeuron text-capitalize">{{ $service->name }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="testimonilasBlock">
        <div class="container">
            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                    class="textSecondary">Testimonials</span></h1>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <!-- testimonialSlider -->
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        @foreach ($feedbacks as $feedback)
                            <div>
                                <!-- testimonialColumn -->
                                <article class="testimonialColumn text-center">
                                    <div class="aligncenter roundedCircle">
                                        <a href="#">
                                            <img src="{{ imagePath('feedback', $feedback->image) }}" class="roundedCircle"
                                                alt="{{ $feedback->name }}">
                                        </a>
                                    </div>
                                    <h2 class="fontNeuron"><a href="#">{{ $feedback->name }}</a></h2>
                                    <p><em>{{ $feedback->content }}</em></p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
