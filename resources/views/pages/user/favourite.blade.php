@extends('layouts.frontend')

@section('title', 'Favourite Property')

@push('css')

@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Favourite Properties</h3>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Favourite Properties</span></a></li>
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

                    <div class="row property-list-all">
                        @if(!$favouriteItems->isEmpty())
                        @foreach($favouriteItems as $property)
                        <div class="col-md-4 col-sm-12 list-property">
                            <div class="owl-wrapper-outer">
                                <div class="feature-item">
                                    <figure>
                                        <span>
                                            <strong>{{ $property->property->offer->name_en }}</strong>
                                        </span>

                                        <a href="@if(Auth::check()) {{route('user.favourite.property.show', $property->property->id)}} @else {{ route('login')}} @endif">
                                            <img src="{{ asset('storage/images/cover/'.$property->property->cover_image) }}" alt="cover photo" />
                                            <div class="content-list text-center">
                                                <p style="margin-bottom: 10px;">{{ $property->property->district->name_en }}, {{ $property->property->thana->name_en}}, {{ $property->property->region->name_en}}</p>
                                                @if($property->property->offer->id == 1 || $property->property->offer->id == 2)
                                                <p>
                                                    Land Area: {{ $property->property->amount_of_land_en }} Katha <br />
                                                    Price: {{ $property->property->minimum_price_en }} BDT per Katha
                                                </p>
                                                @else
                                                <p>
                                                    Flat Area: {{ $property->property->flat_space_en }} Square feet <br />
                                                    Price: {{ $property->property->minimum_price_en }} BDT per Square feet
                                                </p>
                                                @endif
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h3>No property found in your favourite list.</h3>
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