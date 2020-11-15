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
                        <li><a href="{{route('home')}}">Home</a></li>
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
                            <div class="row filter box">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Find Your Property <i class="fa fa-search"></i></h5>
                                    <form action="{{route('search.property')}}" method="POST">
                                        @csrf
                                        <ul>
                                            <li>
                                                <select class="selectpicker buyer-choice" id="buyer-choice" name="buyer-choice" required="required">
                                                    <option disabled selected>Your plan?</option>
                                                    <option value="1" class="selected-land">Buy Land</option>
                                                    <option value="2" class="selected-land">Rent Land</option>
                                                    <option value="3" class="selected-flat">Buy Flat</option>
                                                    <option value="4" class="selected-flat">Rent Flat</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select name="district" class="selectpicker district" id="district" required="required">
                                                    <option>District</option>
                                                    @foreach($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name_en }}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li>
                                                <select class="thana selectpicker" id="thana" name="thana" required="required">
                                                    <option value="#">Select Thana</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select class="selectpicker local-area" id="local-area" name="region" required="required">
                                                    <option>Local Area</option>
                                                </select>
                                            </li>

                                            <li>
                                                <select class="selectpicker land-area" id="land-area" name="land-area">
                                                    <option value="">Land Area</option>
                                                    <option value="1">2 to 4 katha</option>
                                                    <option value="2">5 to 7 katha</option>
                                                    <option value="3">8 to 10 katha</option>
                                                    <option value="4">More then 10 katha</option>
                                                </select>
                                            </li>

                                            <li>
                                                <select class="selectpicker flat-area" id="flat-area" name="flat-area">
                                                    <option value="">Flat Area</option>
                                                    <option value="1">500 to 800 square feet</option>
                                                    <option value="2">801 to 1100 square feet</option>
                                                    <option value="3">1101 to 1400 square feet</option>
                                                    <option value="4">1401 to 1700 square feet</option>
                                                    <option value="5">1701 to 2000 square feet</option>
                                                    <option value="6">More then 2000 square feet</option>
                                                </select>
                                            </li>

                                            <li>
                                                <div class="search-btn">
                                                    <button type="submit" name="submit" class="btn btn-search">Search</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/Filter Area -->
                    <div class="row property-list-all">
                        @if(!$properties->isEmpty())
                        @foreach($properties as $property)
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>{{ $property->offer->name_en }}</strong>
                                        </span>

                                        <a href="@if(Auth::check()) {{route('property.show', $property->id)}} @else {{ route('login')}} @endif">
                                            <img src="{{ asset('storage/images/cover/'.$property->cover_image) }}" alt="cover photo" />
                                            <div class="content-list text-center">
                                                <p style="margin-bottom: 10px;">{{ $property->district->name_en }}, {{ $property->thana->name_en}}, {{ $property->region->name_en}}</p>
                                                @if($property->offer->id == 1 || $property->offer->id == 2)
                                                <p>
                                                    Land Area: {{ $property->amount_of_land_en }} Katha <br />
                                                    Price: {{ $property->minimum_price_en }} BDT per Katha
                                                </p>
                                                @else
                                                <p>
                                                    Flat Area: {{ $property->flat_space_en }} Square feet <br />
                                                    Price: {{ $property->minimum_price_en }} BDT per Square feet
                                                </p>
                                                @endif
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-12 text-center">
                            <div class="pagin">
                                {!! $properties->links() !!}
                            </div>
                        </div>
                        @else
                        <h3>No property found. Please check near about this place.</h3>
                        @endif
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