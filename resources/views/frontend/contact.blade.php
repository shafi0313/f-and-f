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
                    <!-- mapFull -->
                    <div class="map-area mapPlacer">
                        <div id="map-container">
                            <iframe width="100%" height="320" frameborder="0" scrolling="no" marginheight="0"
                                src="https://maps.google.com/maps?q=1B Katoomba Place, Belmont WA 6104, &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                marginwidth="0"></iframe>
                        </div>
                    </div>
                    <!-- content -->
                    <section id="content" class="container pabIndent">
                        <!-- contactMain -->
                        <div class="contactMain">
                            <div class="row flexSameHeight">
                                <div class="col-xs-12 col-sm-7 col-md-8">
                                    <!-- contactFormPage -->
                                    <div class="contactFormPage">
                                        <h4 class="fontNeuron">Send Us Message</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="txtname" placeholder="Your Name"
                                                            class="form-control" required data-error="NEW ERROR MESSAGE">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4">
                                                    <div class="form-group">
                                                        <input type="email" id="txtemail" placeholder="Email"
                                                            class="form-control" required data-error="NEW ERROR MESSAGE">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4">
                                                    <div class="form-group">
                                                        <input type="tel" id="txttel" placeholder="Phone Number"
                                                            class="form-control" required data-error="NEW ERROR MESSAGE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="url" id="txtwebsite" placeholder="Subject"
                                                            class="form-control" required data-error="NEW ERROR MESSAGE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="txtmessage" placeholder="Message" required data-error="NEW ERROR MESSAGE"></textarea>
                                            </div>
                                            <button type="submit" class="btn btnDark fontNeuron buttonXL"
                                                id="form-submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-4">
                                    <!-- contactInfoPage -->
                                    <div class="contactInfoPage">
                                        <h4 class="fontNeuron">Get In Touch</h4>
                                        <address class="adr">
                                            <div class="item">
                                                <i class="fi flaticon-navigation"></i>
                                                <span class="text">1B Katoomba Place, Belmont WA 6104.</span>
                                            </div>
                                            <div class="item">
                                                <i class="fi flaticon-24-hours"></i>
                                                <span class="text"><a href="tel:+61 08 93439107">+61 08 93439107,
                                                        0433282508</a></span>
                                            </div>
                                            <div class="item">
                                                <i class="fi flaticon-mail"></i>
                                                <span class="text"><a
                                                        href="mailto:anwar@focustaxation.com.au">anwar@focustaxation.com.au</a></span>
                                            </div>
                                        </address>
                                        <ul class="socialNetworks list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
