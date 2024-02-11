<div class="container">
    <!-- headerHolder -->
    <div class="headerHolder">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <!-- logo -->
                <div class="logo">
                    <a href="home.html">
                        <img src="{{ asset('uploads/images/logo/f-and-f-2.png') }}" alt="" style="height: 48px">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-9 d-flex">
                <!-- headerContactList -->
                <ul class="list-unstyled headerContactList">
                    <li>
                        <a href="tel:+61 08 93439107" class="icn icnBubble noShrink text-info">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        <div class="descr hidden-xs">
                            <strong class="fwNormal elemenBlock text">
                                <a href="tel:+61 08 93439107">+61 08 93439107, 0433282508</a>
                            </strong>
                            <strong class="fwNormal elemenBlock text">
                                <a href="mailto:anwar@focustaxation.com.au">anwar@focustaxation.com.au</a>
                            </strong>
                        </div>
                    </li>
                    <li class="hidden-xs">
                        <span class="icn icnJumping text-info noShrink"><i class="fa-solid fa-location-dot"></i></span>
                        <div class="descr">
                            <strong class="fwNormal elemenBlock text">
                                1B Katoomba Place, <br> Belmont WA 6104
                            </strong>
                        </div>
                    </li>
                </ul>
                <!-- headerSearchForm -->
                <form action="#" class="headerSearchForm">
                    <a class="headerSearchOpener roundedCircle bgWhite" role="button" data-toggle="collapse"
                        href="#headerSearchFormcollapse" aria-expanded="false" aria-controls="headerSearchFormcollapse">
                        <i class="fi flaticon-search btnOpen"></i>
                        <i class="fas fa-times btnClose"></i>
                    </a>
                    <!-- headerSearchFormcollapse -->
                    <div class="collapse searchFormcollapse bgWhite" id="headerSearchFormcollapse" aria-expanded="false"
                        role="form">
                        <div class="form-group form-group-lg">
                            <label for="s" class="labelIcn"><i class="fi flaticon-search"></i></label>
                            <input type="search" id="s" class="form-control elemenBlock"
                                placeholder="Search&hellip;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- pageNav -->
    <nav id="pageNav" class="navbar navbar-default pageNav1">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header hidden-sm hidden-md hidden-lg">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- navbar collapse -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navigation-wrapper">
                <strong
                    class="h elemenBlock h4 textWhite text-center hidden-sm hidden-md hidden-lg menuTitle fontNeuron"
                    id="menu-title">Menu</strong>
                <!-- pageMainNav -->
                <ul class="nav navbar-nav pageMainNav pageMainNav1">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('properties') }}">Residential Property</a>
                    </li>
                    <li>
                        <a href="#">Commercial Property</a>
                    </li>
                    <!-- remove dropdownFull class when its just regular dropdown -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Application<span class="caret"></span></a>
                        <div class="frame-wrap">
                            <div class="frame">
                                <ul class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                    <li><a href="404.html">Residential Rental Application</a></li>
                                    <li><a href="404.html">Commercial Lease Application</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- userOptions -->
        {{-- <div class="userOptions">
            <!-- UserLinksList -->
            <ul class="list-unstyled UserLinksList">
                <li>
                    <a href="#popup1" class="lightbox">
                        <i class="fi flaticon-social icn"></i>
                        <strong class="text fwNormal hidden-xs hidden-sm">Login</strong>
                    </a>
                </li>
                <li>
                    <a href="#popup1" class="lightbox">
                        <i class="fi flaticon-edit icn"></i>
                        <strong class="text fwNormal hidden-xs hidden-sm">Register</strong>
                    </a>
                </li>
            </ul>
            <!-- headerModalOpener -->
            <a href="#" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i>
                Submit Property</a>
        </div> --}}
    </nav>
</div>
