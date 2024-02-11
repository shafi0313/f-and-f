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
    <!-- findFormBlock -->
    {{-- <form action="#" class="bgWhite findFormBlock hasShadow">
        <div class="container">
            <h2 class="fontNeuron">FIND YOUR <span class="text-info">HOME</span></h2>
            <hr class="sep elemenBlock">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Enter Your Keyword&hellip;">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Location">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="All Property Types" class="chosen-select">
                            <option value="1">For Rent</option>
                            <option value="2">For Sale</option>
                            <option value="3">House</option>
                            <option value="4">Property</option>
                            <option value="5">Real Estate</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="All Property Types" class="chosen-select">
                            <option value="1">For Rent</option>
                            <option value="2">For Sale</option>
                            <option value="3">House</option>
                            <option value="4">Property</option>
                            <option value="5">Real Estate</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <div class="price-wrapper">Price Range: From <b class="startValue">$500</b> to <b
                                class="endValue">$500,000</b><!-- Filter by price interval: <b>€ 10</b><b>€ 1000</b> -->
                        </div>
                        <input id="price-range" type="text" class="span2" value="" data-slider-min="500"
                            data-slider-max="500000" data-slider-step="10" data-slider-value="[100000,400000]" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <select data-placeholder="Beds" class="chosen-select">
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <select data-placeholder="Baths" class="chosen-select">
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Area Min... (Sq Ft)">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="Parking" class="chosen-select">
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- orderRow -->
            <div class="row orderRow">
                <div class="col-xs-12 col-sm-3 order1">
                    <!-- otherFeaturesOpener -->
                    <a class="btnPlus otherFeaturesOpener text-capitalize" role="button" data-toggle="collapse"
                        href="#otherFeaturescollapse" aria-expanded="false" aria-controls="otherFeaturescollapse">
                        <i class="fas btnIcn fa-plus-circle text-info opener"></i>
                        <i class="fas fa-minus-circle closer btnIcn text-info"></i>
                        Others Features
                    </a>
                </div>
                <div class="col-xs-12 order3">
                    <!-- otherFeaturesCollapse -->
                    <div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
                        <!-- checkList -->
                        <ul class="list-unstyled checkList text-primary">
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Air conditioning</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cofee pot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fan</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hi-fi</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Balcony</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Computer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fridge</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Internet</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Bedding</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Grill</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Iron</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cable TV</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Dishwasher</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hairdryer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Juicer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cleaning after exit</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">DVD</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Heating</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Lift</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-offset-6 col-sm-3 order2">
                    <button type="button" class="btn btnSecondary text-uppercase fontNeuron pull-right">SEARCH</button>
                </div>
            </div>
        </div>
    </form> --}}
    <!-- latestPostsBlock -->
    {{-- <section class="latestPostsBlock container">
        <!-- rowHead -->
        <header class="row rowHead">
            <div class="col-xs-12 col-sm-5">
                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">RESIDENTIAL</span> <span
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
        <div class="row text-center btnHolder">
            <a href="properties-detial.html" class="btn btn-primary btnPrimaryOutline text-capitalize fontNeuron">Show
                More Property</a>
        </div>
    </section> --}}
    <!-- mostPostsBlock -->
    <section class="mostPostsBlock bgWhite">
        <div class="container">
            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">MOST POPULAR</span> <span
                    class="textSecondary">PLACES</span></h1>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <!-- visualPostColumn -->
                    <a href="properties-detial.html"
                        class="visualPostColumn hasOver elemenBlock text-center type01 textWhite">
                        <span class="bgCover elemenBlock"
                            style="background-image: url(https://via.placeholder.com/555x450);"></span>
                        <div class="captionWrap">
                            <h2 class="fontNeuron">New York</h2>
                            <h3 class="fontNeuron fwNormal">24 Properties</h3>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!-- visualPostColumn -->
                    <a href="properties-detial.html"
                        class="visualPostColumn hasOver elemenBlock text-center type02 textWhite">
                        <span class="bgCover elemenBlock"
                            style="background-image: url(https://via.placeholder.com/555x210);"></span>
                        <div class="captionWrap">
                            <h2 class="fontNeuron">Chicago</h2>
                            <h3 class="fontNeuron fwNormal">24 Properties</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="#" class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
                                <span class="bgCover elemenBlock"
                                    style="background-image: url(https://via.placeholder.com/265x210);"></span>
                                <div class="captionWrap">
                                    <h2 class="fontNeuron">Los Angeles</h2>
                                    <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="properties-detial.html"
                                class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
                                <span class="bgCover elemenBlock"
                                    style="background-image: url(https://via.placeholder.com/265x210);"></span>
                                <div class="captionWrap">
                                    <h2 class="fontNeuron">San Francisco</h2>
                                    <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                </div>
                            </a>
                        </div>
                    </div>
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
    <!-- ourAgentBlock -->
    <section class="bgWhite ourAgentBlock">
        <div class="container">
            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                    class="textSecondary">AGENT</span></h1>
            <div class="row">
                <!-- profilesSlider -->
                <div class="four-slider slickSlider profilesSlider">
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="agent-detail.html">
                                        <img src="https://via.placeholder.com/260x260" alt="Veronica Green Sales Executive">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Veronica Green</a>
                                    </h2>
                                    <h3 class="fwNormal text-capitalize">Sales Executive</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="agent-detail.html">
                                        <img src="https://via.placeholder.com/260x260" alt="Guti Salvio Real Estate Broker">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Guti Salvio</a>
                                    </h2>
                                    <h3 class="fwNormal text-capitalize">Real Estate Broker</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="agent-detail.html">
                                        <img src="https://via.placeholder.com/260x260" alt="Elenia Jesse Selling Agent">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Elenia Jesse</a>
                                    </h2>
                                    <h3 class="fwNormal text-capitalize">Selling Agent</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="agent-detail.html">
                                        <img src="https://via.placeholder.com/260x260" alt="Emmy Ramos Buying Agent">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Emmy Ramos</a></h2>
                                    <h3 class="fwNormal text-capitalize">Buying Agent</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="agent-detail.html">
                                        <img src="https://via.placeholder.com/260x260"
                                            alt="Veronica Green Sales Executive">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Veronica Green</a>
                                    </h2>
                                    <h3 class="fwNormal text-capitalize">Sales Executive</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/260x260"
                                            alt="Guti Salvio Real Estate Broker">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Guti Salvio</a></h2>
                                    <h3 class="fwNormal text-capitalize">Real Estate Broker</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/260x260" alt="Elenia Jesse Selling Agent">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Elenia Jesse</a></h2>
                                    <h3 class="fwNormal text-capitalize">Selling Agent</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- profileColumn -->
                            <article class="profileColumn hasOver">
                                <div class="aligncenter">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/260x260" alt="Emmy Ramos Buying Agent">
                                    </a>
                                </div>
                                <div class="textWrap">
                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Emmy Ramos</a></h2>
                                    <h3 class="fwNormal text-capitalize">Buying Agent</h3>
                                    <div class="collapseWrap">
                                        <!-- profileColumnSocial -->
                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonilasBlock -->
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

    <section class="container sponsorsBlock">
        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                class="textSecondary">PARTNERS</span></h1>
        <!-- LogosCarousel -->
        <div class="logos-slider slickSlider LogosCarousel">
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor01.png') }}" alt="helsinki">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor02.png') }}" alt="norway">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor03.png') }}" alt="lars grondahl">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor04.png') }}" alt="kirsten">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor05.png') }}" alt="only oslo">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor02.png') }}" alt="norway">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor03.png') }}" alt="lars grondahl">
                    </a>
                </div>
            </div>
            <div>
                <!-- logoColumn -->
                <div class="logoColumn">
                    <a href="#">
                        <img src="{{ asset('frontend/images/sponsor04.png') }}" alt="kirsten">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
