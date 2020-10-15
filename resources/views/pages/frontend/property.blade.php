@extends('layouts.frontend')

@section('title', 'Property')

@push('css')

@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Property List</h3>
                    <ul>
                        <li><a href="home-1.html">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Property List</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Property list area-->
<section class="property-list-area properties-v3 list-one section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 floatright all-property">
                <div class="property-list-all">
                    <!--Filter Area -->
                    <section class="filter-area filter-v1 section">
                        <div class="container">
                            <div class="row filter heading">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
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
                    <div class="row property-list-all">
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>For Sale</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-1.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>To-Let</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-2.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>To-Let</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-3.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>For Sale</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-4.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>For Sale</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-5.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>To-Let</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-6.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>Dhaka</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-1.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>Dhaka</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-7.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>Dhaka</strong>
                                        </span>

                                        <a href="{{route('property.show', 1)}}">
                                            <img src="{{ asset('assets/images/properties/properties-list-8.jpg')}}" alt="" />
                                            <div class="content-list text-center">
                                                <h3>Villa In Hialeah, Dade County</h3>
                                                <p>$7,500 Per Month - Single Family Home</p>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pagin">
                                <ul>
                                    <li><span><i class="fa fa-angle-double-left"></i></span></li>
                                    <li><span class="active">1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li><span><i class="fa fa-angle-double-right"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Property list area-->
<!--Footer-->
@endsection

@push('js')

@endpush