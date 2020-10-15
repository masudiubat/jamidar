@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
<!--Filter Area -->
<section class="filter-area filter-v2 section">
    <div class="container">
        <div class="row filter heading">
            <div class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12">
                <h4>Find Your Property <i class="fa fa-search"></i></h4>
            </div>
        </div>
        <div class="row filter box">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <select class="selectpicker">
                            <option>Buy</option>
                            <option>Rent</option>
                        </select>
                    </li>
                    <li>
                        <select class="selectpicker">
                            <option>District</option>
                            <option>Dhaka</option>
                            <option>Khulna</option>
                            <option>Rajshai</option>
                            <option>Bagerhat</option>
                        </select>
                    </li>
                    <li>
                        <select class="selectpicker">
                            <option>Thana</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </li>
                    <li>
                        <select class="selectpicker">
                            <option>Area</option>
                            <option>Dhaka</option>
                            <option>Khulna</option>
                            <option>Rajshai</option>
                            <option>Bagerhat</option>
                        </select>
                    </li>
                    <li>
                        <div class="search-btn">
                            <a class="btn btn-b">Search</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="filter-box-shadow"></div>
    </div>
</section>
<!--/Filter Area -->
<!--Slider Area -->
<section class="slider-area">
    <div class="slider-home1">
        <div class="slider-item">
            <img src="{{ asset('assets/images/slider/slider1-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/images/slider/slider2-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/images/slider/slider3-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/images/slider/slider4-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
    </div>
</section>
<!--/Slider Area -->

<!--About us area-->
<section class="about-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <div class="section-heading-v1 text-center">
                        <h2>WHO <span>WE ARE ?</span></h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio</h4>
                    </div>


                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio commodo euismod. Quisque augue purus, porta vel facilisis ac, accumsan eu elit. Nulla ultricies odio sit amet arcu sodales, id ornare tortor tempor. Cras pellentesque lorem eget tincidunt eleifend. Phasellus a finibus metus. Aliquam eu nisl pellentesque
                        pellentesque libero quis, tempor nisi. Donec vitae mattis libero. Mauris est ipsum, vestibulum nec nibh quis, lacinia fringilla magna. Proin nec lacus ut odio euismod tincidunt necet lectus. </p>

                    <a href="#" class="btn-a">MORE US</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-image">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--/About us area-->

<!-- Services Area -->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h2>Our <span>services</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    <h4>Buying Properties</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-university"></i></span>
                    <h4>Selling Properties</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-hourglass-half"></i></span>
                    <h4>Renting Properties</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-key"></i></span>
                    <h4>Mortgage Properties</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Services Area -->

<!--Feature Area -->
<section class="feature-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center feature-content">
                    <h2>Why <span>Chose Us</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-body">
                    <div class="feature-content">
                        <ul>
                            <li>
                                <h4><i class="fa fa-image"></i> Living Inside a Nature</h4>
                                <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                                </p>
                            </li>
                            <li>
                                <h4><i class="fa fa-image"></i> Royal Touch Paint</h4>
                                <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                                </p>
                            </li>
                            <li>
                                <h4><i class="fa fa-image"></i> Luxurious Fittings</h4>
                                <p>Real Homes theme provides various templates to fulfill the needs of real estate agents.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-body">
                    <div class="feature-content">
                        <ul>
                            <li>
                                <h4><i class="fa fa-image"></i> Living Inside a Nature</h4>
                                <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                                </p>
                            </li>
                            <li>
                                <h4><i class="fa fa-image"></i> Royal Touch Paint</h4>
                                <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                                </p>
                            </li>
                            <li>
                                <h4><i class="fa fa-image"></i> Luxurious Fittings</h4>
                                <p>Real Homes theme provides various templates to fulfill the needs of real estate agents.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/Feature Area -->

<!--Feature Properties Area -->
<section class="properties-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 text-center">
                    <h2><span>Featured</span> properties</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 properties-image">
                <a href="{{ asset('assets/images/properties/properties-1-v1.jpg')}}">
                    <figure>
                        <img src="{{ asset('assets/images/properties/properties-1-v1.jpg')}}" alt="" />
                        <span class="image-cap"><i class="fa fa-plus"></i></span>
                    </figure>
                </a>
            </div>
            <!--/Single properties-image-->
            <div class="col-md-4 col-sm-6 col-xs-12 properties-image">
                <a href="{{ asset('assets/images/properties/properties-2-v1.jpg')}}">
                    <figure>
                        <img src="{{ asset('assets/images/properties/properties-2-v1.jpg')}}" alt="" />
                        <span class="image-cap"><i class="fa fa-plus"></i></span>
                    </figure>
                </a>
            </div>
            <!--/Single properties-image-->
            <div class="col-md-4 col-sm-6 col-xs-12 properties-image">
                <a href="{{ asset('assets/images/properties/properties-3-v1.jpg')}}">
                    <figure>
                        <img src="{{ asset('assets/images/properties/properties-3-v1.jpg')}}" alt="" />
                        <span class="image-cap"><i class="fa fa-plus"></i></span>
                    </figure>
                </a>
            </div>
            <!--/Single properties-image-->
            <div class="col-md-4 col-sm-6 col-xs-12 properties-image">
                <a href="{{ asset('assets/images/properties/properties-4-v1.jpg')}}">
                    <figure>
                        <img src="{{ asset('assets/images/properties/properties-4-v1.jpg')}}" alt="" />
                        <span class="image-cap"><i class="fa fa-plus"></i></span>
                    </figure>
                </a>
            </div>
            <!--/Single properties-image-->
            <div class="col-md-4 col-sm-6 col-xs-12 properties-image">
                <a href="{{ asset('assets/images/properties/properties-5-v1.jpg')}}">
                    <figure>
                        <img src="{{ asset('assets/images/properties/properties-5-v1.jpg')}}" alt="" />
                        <span class="image-cap"><i class="fa fa-plus"></i></span>
                    </figure>
                </a>
            </div>
            <!--/Single properties-image-->
        </div>
    </div>
</section>
<!--Feature Properties Area -->

<!--Properties in most popular places-->
<section class="properties-area properties-v3 services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-v3 text-center">
                    <h2>Properties in <span>Most popular places</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus tellus in tristique consequat.</p>
                </div>
            </div>
        </div>
        <div class="row feature-slider">
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Dhaka</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-1-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Sirajganj</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-2-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Rajshahi</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-3-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Bogura</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-1-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Khulna</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-2-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Rongpur</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-3-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Dinajpur</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-1-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Pabna</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-2-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Nator</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-3-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Tangail</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-1-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-item">
                    <figure>
                        <span>
                            <strong>Gazipur</strong>
                        </span>
                        <img src="{{asset('assets/images/properties/properties-2-v3.jpg')}}" alt="" />
                        <div class="feature-slider-content text-center">
                            <h2>The Helux villa</h2>
                            <h4>$5,000 Per Month</h4>
                            <ul>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Properties in most popular places-->


<!--Recent Properties Area -->
<section class="recent-properties-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h2>Recent Properties <span>Already Sold</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                </div>
            </div>
        </div>
        <!--properties slider-->
        <div class="properties-slider">
            <div class="row">
                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <img src="{{ asset('assets/images/recent-properties/properties-1.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <div class="slider-content-area">
                            <div class="content-properties">
                                <h4><a href="#">Interior design boundary</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>
                                <ul>
                                    <li><strong>$4,500 Permonth</strong></li>
                                    <li class="floatright"><a href="#">Read More..</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single floatright">
                        <img src="{{ asset('assets/images/recent-properties/properties-2.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single floatleft">
                        <div class="slider-content-area">
                            <div class="content-properties">
                                <h4><a href="#">Interior design boundary</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>
                                <ul>
                                    <li><strong>$4,500 Permonth</strong></li>
                                    <li class="floatright"><a href="#">Read More..</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 item-single">
                        <img src="{{ asset('assets/images/recent-properties/properties-1.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12 item-single">
                        <div class="slider-content-area">
                            <div class="content-properties">
                                <h4><a href="#">Interior design boundary</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>
                                <ul>
                                    <li><strong>$4,500 Permonth</strong></li>
                                    <li class="floatright"><a href="#">Read More..</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 item-single floatright">
                        <img src="{{ asset('assets/images/recent-properties/properties-2.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12 item-single floatleft">
                        <div class="slider-content-area">
                            <div class="content-properties">
                                <h4><a href="#">Interior design boundary</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales.</p>
                                <ul>
                                    <li><strong>$4,500 Permonth</strong></li>
                                    <li class="floatright"><a href="#">Read More..</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/properties slider-->
    </div>
</section>
<!--/Recent Properties Area -->
<!-- Agent Area -->
<section class="agent-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 agent-header text-center">
                    <h2>Real estate <span>Agent</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="agent-slider-v1">
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-1-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Jasica Doron</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-2-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Jame Bond</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-3-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-4-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-3-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/images/agent/agent-1-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Agent Area -->
<!--Testimonial-->
<section class="testimonial-area testimonial-v1  section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 text-center">
                    <h2><span>WHAT</span> CLIENT SAY</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="client-content">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                </div>
            </div>
            <div class="col-md-12">
                <div class="client-img text-center">
                    <a data-slide-index="0" href="#">
                        <div class="over-img"><img src="{{ asset('assets/images/client/client-1.jpg')}}" alt="" /></div>
                        <h4>Jasica Doron</h4>
                        <p>Happy seller</p>
                    </a>
                    <a data-slide-index="1" href="#">
                        <div class="over-img"><img src="{{ asset('assets/images/client/client-2.jpg')}}" alt="" /></div>
                        <h4>Jame Bond</h4>
                        <p>Happy seller</p>
                    </a>
                    <a data-slide-index="2" href="#">
                        <div class="over-img"><img src="{{ asset('assets/images/client/client-3.jpg')}}" alt="" /></div>
                        <h4>Hemai Smith</h4>
                        <p>Happy seller</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonial-->
<!--Footer-->
@endsection