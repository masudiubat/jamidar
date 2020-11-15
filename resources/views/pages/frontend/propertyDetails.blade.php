@extends('layouts.frontend')

@section('title', 'Property Details')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>PROPERTY DETAILS</h3>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Property details</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Property details area-->
<section class="property-details-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 floatright">
                <div class="single-descrip">
                    <h4>Property Details</h4>
                    <p>{{ $property->district->name_en }}, {{ $property->thana->name_en }}, {{ $property->region->name_en }}</p>


                    <div class="bg-photo">
                        @foreach($property->images as $image)
                        <img src="{{ asset('storage/images/details/'.$image->image)}}" alt="photo">
                        @endforeach
                    </div>

                    <div class="sm-photo">
                        <?php $i = 0; ?>
                        @foreach($property->images as $image)
                        <a href="#" data-slide-index="<?php echo $i++; ?>"><img src="{{ asset('storage/images/details/'.$image->image )}}" alt="photo"></a>
                        @endforeach
                    </div>
                </div>
                <div class="single-descrip">
                    <h4>Essential Information:</h4>
                    @if($property->offer->id == 1 || $property->offer->id == 2)
                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i> Property Type: Land</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Advertisement for: {{ $property->offer->name_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Property Area: {{ $property->amount_of_land_en }} Katha</li>
                        <li><i class="fa fa-chevron-circle-right"></i> @if($property->offer->id == 1) Price (Per katha) @else Rent (Per katha) @endif: {{ $property->minimum_price_en }} BDT</li>
                        <li><i class="fa fa-chevron-circle-right"></i> District: {{ $property->district->name_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Thana: {{ $property->thana->name_en  }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Region/Moholla : {{ $property->region->name_en }}</li>
                    </ul>
                    @else
                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i> Property Type: Flat</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Advertisement for: {{ $property->offer->name_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Flat Space: {{ $property->flat_space_en }} Square Feet</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Number of Bedroom : {{ $property->no_of_bedroom_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> @if($property->offer->id == 3) Price (Per square feet) @else Rent @endif: {{ $property->minimum_price_en }} BDT</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Floor : {{ $property->floor_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> House: {{ $property->house_en  }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Road: {{ $property->road_en }}</li>

                        <li><i class="fa fa-chevron-circle-right"></i> District: {{ $property->district->name_en }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Thana: {{ $property->thana->name_en  }}</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Region/Moholla : {{ $property->region->name_en }}</li>
                    </ul>
                    @endif
                    <div class="booknow-btn">
                        <a href="{{route('user.select.favourite', $property->id)}}" class="btn-a">Select as Favourite</a>
                        <a href="{{route('property.index')}}" class="btn-a">Back</a>
                    </div>
                </div>
                <div class="single-descrip">
                    <h4>Property Description</h4>
                    <p class="out-mar">
                        {{ $property->description_en }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Property details area-->

<!--Footer-->
@endsection