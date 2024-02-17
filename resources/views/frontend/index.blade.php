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
                    <img src="{{ imagePath('property', '1484821429.png') }}" alt="">
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
                    <img src="{{ imagePath('property', '1484821289.png') }}" alt="">
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
            <li>
                <a href="#">
                    <span class="icnHolder roundedCircle"><i class="fi flaticon-house"></i></span>
                    <h2 class="fontNeuron text-capitalize">Saling Service</h2>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icnHolder roundedCircle"><i class="fi flaticon-rent"></i></span>
                    <h2 class="fontNeuron text-capitalize">Renting Service</h2>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icnHolder roundedCircle"><i class="fi flaticon-list"></i></span>
                    <h2 class="fontNeuron text-capitalize">Property Listing</h2>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icnHolder roundedCircle"><i class="fi flaticon-house-1"></i></span>
                    <h2 class="fontNeuron text-capitalize">Property Management</h2>
                </a>
            </li>
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
                        <div>
                            <!-- testimonialColumn -->
                            <article class="testimonialColumn text-center">
                                <div class="aligncenter roundedCircle">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/184x184" class="roundedCircle"
                                            alt="image description">
                                    </a>
                                </div>
                                <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                <p><em>Although we haven’t had many issues but any time there has been an issue you have
                                        been incredibly helpful and whenever you have come out for an inspection you have
                                        been so personable and absolutely lovely to be around. You are a great addition to
                                        the Realtyspace Team and i&hellip;</em></p>
                            </article>
                        </div>
                        <div>
                            <!-- testimonialColumn -->
                            <article class="testimonialColumn text-center">
                                <div class="aligncenter roundedCircle">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/184x184" class="roundedCircle"
                                            alt="image description">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                    <p><em>Although we haven’t had many issues but any time there has been an issue you have
                                            been incredibly helpful and whenever you have come out for an inspection you
                                            have been so personable and absolutely lovely to be around. You are a great
                                            addition to the Realtyspace Team and i&hellip;</em></p>
                                </div>
                            </article>
                        </div>
                        <div>
                            <!-- testimonialColumn -->
                            <article class="testimonialColumn text-center">
                                <div class="aligncenter roundedCircle">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/184x184" class="roundedCircle"
                                            alt="image description">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                    <p><em>Although we haven’t had many issues but any time there has been an issue you have
                                            been incredibly helpful and whenever you have come out for an inspection you
                                            have been so personable and absolutely lovely to be around. You are a great
                                            addition to the Realtyspace Team and i&hellip;</em></p>
                                </div>
                            </article>
                        </div>
                        <div>
                            <!-- testimonialColumn -->
                            <article class="testimonialColumn text-center">
                                <div class="aligncenter roundedCircle">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/184x184" class="roundedCircle"
                                            alt="image description">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                    <p><em>Although we haven’t had many issues but any time there has been an issue you have
                                            been incredibly helpful and whenever you have come out for an inspection you
                                            have been so personable and absolutely lovely to be around. You are a great
                                            addition to the Realtyspace Team and i&hellip;</em></p>
                                </div>
                            </article>
                        </div>
                        <div>
                            <!-- testimonialColumn -->
                            <article class="testimonialColumn text-center">
                                <div class="aligncenter roundedCircle">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/184x184" class="roundedCircle"
                                            alt="image description">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                    <p><em>Although we haven’t had many issues but any time there has been an issue you have
                                            been incredibly helpful and whenever you have come out for an inspection you
                                            have been so personable and absolutely lovely to be around. You are a great
                                            addition to the Realtyspace Team and i&hellip;</em></p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
